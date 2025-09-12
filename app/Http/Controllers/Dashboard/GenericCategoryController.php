<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\GenericCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GenericCategoryController extends Controller
{
    /**
     * Affiche la liste des catégories génériques
     */
    public function index()
    {
        $categories = GenericCategory::withCount('links')->get();
        return view('dashboard.generic_category.index', compact('categories'));
    }

    /**
     * Enregistre une nouvelle catégorie générique
     */
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'color' => 'nullable|string|max:7',
            'status' => 'required|boolean|in:0,1',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Traitement de l'icône
        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('icons/categories', 'public');
            $validated['icon'] = 'storage/' . $iconPath;
        }

        // Création de la catégorie
        $category = new GenericCategory();
        $category->name = $validated['name'];
        $category->description = $validated['description'] ?? null;
        $category->color = $validated['color'] ?? null;
        $category->status = $validated['status'];
        $category->user_id = Auth::id();
        $category->icon = $validated['icon'] ?? null;
        $category->save();

        return redirect()->route('generic-categories.index')
            ->with('success', 'Catégorie créée avec succès.');
    }

    /**
     * Met à jour une catégorie existante
     */
    public function update(Request $request, $id)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'color' => 'nullable|string|max:7',
            'status' => 'required|boolean|in:0,1',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Récupération de la catégorie
        $category = GenericCategory::findOrFail($id);

        // Mise à jour des données
        $category->name = $validated['name'];
        $category->description = $validated['description'] ?? null;
        $category->color = $validated['color'] ?? null;
        $category->status = $validated['status'];

        // Traitement de l'icône
        if ($request->hasFile('icon')) {
            // Suppression de l'ancienne icône
            if ($category->icon && file_exists(public_path($category->icon))) {
                unlink(public_path($category->icon));
            }
            // Stockage de la nouvelle icône
            $iconPath = $request->file('icon')->store('icons/categories', 'public');
            $category->icon = 'storage/' . $iconPath;
        }
        // Sauvegarde des modifications
        $category->save();
        return redirect()->route('generic-categories.index')->with('success', 'Catégorie mise à jour avec succès.');
    }

    /**
     * Supprime une catégorie
     */
    public function destroy($id)
    {
        $category = GenericCategory::findOrFail($id);
        // Vérifier si des liens utilisent cette catégorie
        $linksCount = $category->links()->count();
        if ($linksCount > 0) {
            return redirect()->route('generic-categories.index')
                ->with('error', 'Impossible de supprimer cette catégorie car elle est utilisée par ' . $linksCount . ' lien(s).');
        }
        // Suppression de l'icône
        if ($category->icon && file_exists(public_path($category->icon))) {
            unlink(public_path($category->icon));
        }
        $category->delete();
        return redirect()->route('generic-categories.index')->with('success', 'Catégorie supprimée avec succès.');
    }
}
