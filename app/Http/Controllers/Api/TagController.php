<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:tags,name,NULL,id,user_id,' . Auth::id(),
        ]);

        $tag = Tag::create([
            'name' => $request->name,
            'user_id' => Auth::id(),
        ]);

        return response()->json([
            'success' => true,
            'response' => $tag,
            'message' => 'Tag ajouté avec succès',
        ], 201);
    }


    public function update(Request $request, $id)
    {
        $tag = Tag::where('user_id', Auth::id())->findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:tags,name,' . $tag->id . ',id,user_id,' . Auth::id(),
        ]);

        $tag->update([
            'name' => $request->name,
        ]);

        return response()->json([
            'success' => true,
            'response' => $tag,
            'message' => 'Tag modifié avec succès',
        ], 200);
    }


    public function destroy($id)
    {
        $tag = Tag::where('user_id', Auth::id())->findOrFail($id);

        $tag->delete();

        return response()->json([
            'success' => true,
            'message' => 'Tag supprimé avec succès',
        ], 200);
    }

    public function index()
    {
        $tags = Tag::where(function ($query) {
            $query->where('user_id', Auth::id()) // Tags personnalisés
            ->orWhereNull('user_id');    // Tags par défaut
        })
            ->with(['links' => function ($query) {
                $query->where('user_id', Auth::id()); // Liens associés à l'utilisateur
            }])
            ->get();

        return response()->json([
            'success' => true,
            'response' => $tags,
            'message' => 'Tags et leurs liens récupérés avec succès',
        ], 200);
    }


    public function links_by_tag($id)
    {
        $tag = Tag::where(function ($query) {
            $query->where('user_id', Auth::id()) // Tags personnalisés
            ->orWhereNull('user_id');    // Tags par défaut
        })
            ->findOrFail($id);

        $links = $tag->links()
            ->where('user_id', Auth::id()) // Liens appartenant à l'utilisateur
            ->get();

        return response()->json([
            'success' => true,
            'response' => [
                'tag' => $tag,
                'links' => $links,
            ],
            'message' => 'Liens récupérés avec succès pour le tag spécifié',
        ], 200);
    }
}
