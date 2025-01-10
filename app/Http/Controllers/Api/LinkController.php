<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required|url',
            'title' => 'nullable|string|max:255',
            'note' => 'nullable|string',
            'is_favorite' => 'nullable|boolean',
            'is_archived' => 'nullable|boolean',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $link = Link::create([
            'user_id' => Auth::id(),
            'url' => $validated['url'],
            'title' => $validated['title'] ?? null,
            'note' => $validated['note'] ?? null,
            'is_favorite' => $validated['is_favorite'] ?? false,
            'is_archived' => $validated['is_archived'] ?? false,
            'category_id' => $validated['category_id'] ?? null,
        ]);

        if (!empty($validated['tags'])) {
            $link->tags()->sync($validated['tags']);
        }

        return response()->json([
            'success' => true,
            'response' => $link->load('tags'),
            'message' => 'Lien créé avec succès'
        ], 201);
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'url' => 'nullable|url',
            'title' => 'nullable|string|max:255',
            'note' => 'nullable|string',
            'is_favorite' => 'nullable|boolean',
            'is_archived' => 'nullable|boolean',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $link = Link::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $link->update($validated);

        if (isset($validated['tags'])) {
            $link->tags()->sync($validated['tags']);
        }

        return response()->json([
            'success' => true,
            'response' => $link->load('tags'),
            'message' => 'Lien mis à jour avec succès'
        ], 200);
    }


    public function destroy($id)
    {
        $link = Link::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $link->delete();

        return response()->json([
            'success' => true,
            'message' => 'Lien supprimé avec succès'
        ], 200);
    }

    public function get_link($id)
    {
        $link = Link::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        if ($link) {
            return response()->json([
                'success' => true,
                'response' => $link->load('tags'),
                'message' => 'Lien récupéré avec succès'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Lien non trouvé'
            ], 404);
        }
    }

}
