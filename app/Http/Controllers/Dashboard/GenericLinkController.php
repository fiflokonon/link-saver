<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\GenericCategory;
use App\Models\GenericLink;
use Illuminate\Http\Request;

class GenericLinkController extends Controller
{
    public function index()
    {
        $genericLinks = GenericLink::with(['country', 'category', 'user'])->get();
        $countries = Country::all();
        $categories = GenericCategory::all();
        return view('dashboard.generic_link.index', compact('genericLinks', 'countries', 'categories'));
    }


    public function store(Request $request)
    {
        // Validation des données entrantes
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:2048',
            'description' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'country_id' => 'nullable|exists:countries,id',
            'status' => 'required|in:active,inactive',
            'validation_status' => 'required|in:pending,approved,rejected',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Traitement de l'image si elle est fournie
        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('icons/generic-links', 'public');
            $validated['icon'] = 'storage/' . $iconPath;
        }

        // Création du lien générique
        $genericLink = new GenericLink();
        $genericLink->title = $validated['title'];
        $genericLink->url = $validated['url'];
        $genericLink->description = $validated['description'] ?? null;
        $genericLink->category_id = $validated['category_id'] ?? null;
        $genericLink->country_id = $validated['country_id'] ?? null;
        $genericLink->status = $validated['status'];
        $genericLink->validation_status = $validated['validation_status'];
        $genericLink->user_id = auth()->id();
        $genericLink->icon = $validated['icon'] ?? null;
        $genericLink->save();

        // Redirection avec message de succès
        return redirect()->route('generic-links.index')->with('success', 'Lien générique créé avec succès.');
    }

    public function update(Request $request, $id)
    {
        // Validation des données entrantes
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:2048',
            'description' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'country_id' => 'nullable|exists:countries,id',
            'status' => 'required|in:active,inactive',
            'validation_status' => 'required|in:pending,approved,rejected',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Récupération du lien générique
        $genericLink = GenericLink::findOrFail($id);

        // Mise à jour des données du lien
        $genericLink->title = $validated['title'];
        $genericLink->url = $validated['url'];
        $genericLink->description = $validated['description'] ?? null;
        $genericLink->category_id = $validated['category_id'] ?? null;
        $genericLink->country_id = $validated['country_id'] ?? null;
        $genericLink->status = $validated['status'];
        $genericLink->validation_status = $validated['validation_status'];

        // Traitement de l'image si une nouvelle est fournie
        if ($request->hasFile('icon')) {
            // Suppression de l'ancienne icône si elle existe
            if ($genericLink->icon && file_exists(public_path($genericLink->icon))) {
                unlink(public_path($genericLink->icon));
            }

            // Stockage de la nouvelle icône
            $iconPath = $request->file('icon')->store('icons/generic-links', 'public');
            $genericLink->icon = 'storage/' . $iconPath;
        }
        // Sauvegarde des modifications
        $genericLink->save();
        // Redirection avec message de succès
        return redirect()->route('generic-links.index')->with('success', 'Lien générique mis à jour avec succès.');
    }


}
