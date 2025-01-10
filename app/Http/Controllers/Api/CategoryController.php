<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where(function ($query) {
            $query->where('user_id', Auth::id()) // Catégories personnalisées
            ->orWhereNull('user_id');    // Catégories par défaut
        })
            ->with(['links' => function ($query) {
                $query->where('user_id', Auth::id()); // Liens de l'utilisateur dans chaque catégorie
            }])
            ->get();

        return response()->json([
            'success' => true,
            'response' => $categories,
            'message' => 'Catégories et leurs liens récupérés avec succès',
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::create([
            'name' => $validated['name'],
            'user_id' => Auth::id(), // Si c'est une catégorie personnalisée par l'utilisateur
        ]);

        return response()->json([
            'success' => true,
            'response' => $category,
            'message' => 'Catégorie créée avec succès',
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::where('id', $id)
            ->where(function ($query) {
                $query->where('user_id', Auth::id()) // Catégorie personnalisée
                ->orWhereNull('user_id');    // Catégorie par défaut
            })
            ->firstOrFail();

        $category->update($validated);

        return response()->json([
            'success' => true,
            'response' => $category,
            'message' => 'Catégorie mise à jour avec succès',
        ], 200);
    }

    public function destroy($id)
    {
        $category = Category::where('id', $id)
            ->where('user_id', Auth::id()) // Seules les catégories personnalisées peuvent être supprimées
            ->firstOrFail();

        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Catégorie supprimée avec succès',
        ], 200);
    }

    public function links_by_category($id)
    {
        $category = Category::where(function ($query) {
            $query->where('user_id', Auth::id()) // Catégories personnalisées
            ->orWhereNull('user_id');    // Catégories par défaut
        })
            ->findOrFail($id);

        $links = Link::where('category_id', $id)
            ->where('user_id', Auth::id()) // Liens de l'utilisateur
            ->get();

        return response()->json([
            'success' => true,
            'response' => [
                'category' => $category,
                'links' => $links,
            ],
            'message' => 'Liens récupérés avec succès pour la catégorie spécifiée',
        ], 200);
    }

}
