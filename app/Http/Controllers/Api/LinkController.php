<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{

    /**
     * @OA\Post(
     *     path="/api/links",
     *     summary="Create a new link",
     *     tags={"Links"},
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"url"},
     *             @OA\Property(property="url", type="string", format="url", example="https://example.com"),
     *             @OA\Property(property="title", type="string", example="Example Title"),
     *             @OA\Property(property="note", type="string", example="Example Note"),
     *             @OA\Property(property="is_favorite", type="boolean", example=false),
     *             @OA\Property(property="is_archived", type="boolean", example=false),
     *             @OA\Property(property="category_id", type="integer", example=1),
     *             @OA\Property(property="tags", type="array", @OA\Items(type="integer", example=1)),
     *             @OA\Property(property="alerts", type="array", @OA\Items(
     *                 @OA\Property(property="reminder_at", type="string", format="date-time", example="2025-01-14T16:31:58Z"),
     *                 @OA\Property(property="message", type="string", example="Example alert message")
     *             ))
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Link created successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="response", ref="#/components/schemas/Link"),
     *             @OA\Property(property="message", type="string", example="Lien créé avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="The given data was invalid."),
     *             @OA\Property(property="errors", type="object")
     *         )
     *     )
     * )
     */
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
            'alerts' => 'nullable|array',
            'alerts.*.reminder_at' => 'required_with:alerts|date',
            'alerts.*.message' => 'nullable|string',
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

        if (!empty($validated['alerts'])) {
            foreach ($validated['alerts'] as $alertData) {
                $link->alerts()->create($alertData);
            }
        }

        return response()->json([
            'success' => true,
            'response' => $link->load('tags', 'alerts'),
            'message' => 'Lien créé avec succès'
        ], 201);
    }

    /**
     * @OA\Put(
     *     path="/api/links/{id}",
     *     summary="Update an existing link",
     *     tags={"Links"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID of the link to update"
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="url", type="string", format="url", example="https://example.com"),
     *             @OA\Property(property="title", type="string", example="Example Title"),
     *             @OA\Property(property="note", type="string", example="Example Note"),
     *             @OA\Property(property="is_favorite", type="boolean", example=false),
     *             @OA\Property(property="is_archived", type="boolean", example=false),
     *             @OA\Property(property="category_id", type="integer", example=1),
     *             @OA\Property(property="tags", type="array", @OA\Items(type="integer", example=1))
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Link updated successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="response", ref="#/components/schemas/Link"),
     *             @OA\Property(property="message", type="string", example="Lien mis à jour avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Link not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Lien non trouvé")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="The given data was invalid."),
     *             @OA\Property(property="errors", type="object")
     *         )
     *     )
     * )
     */
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

    /**
     * @OA\Delete(
     *     path="/api/links/{id}",
     *     summary="Delete a link",
     *     tags={"Links"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID of the link to delete"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Link deleted successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="message", type="string", example="Lien supprimé avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Link not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Lien non trouvé")
     *         )
     *     )
     * )
     */
    public function destroy($id)
    {
        $link = Link::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $link->delete();

        return response()->json([
            'success' => true,
            'message' => 'Lien supprimé avec succès'
        ], 200);
    }

    /**
     * @OA\Get(
     *     path="/api/links/{id}",
     *     summary="Get a specific link",
     *     tags={"Links"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID of the link to retrieve"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Link retrieved successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="response", ref="#/components/schemas/Link"),
     *             @OA\Property(property="message", type="string", example="Lien récupéré avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Link not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Lien non trouvé")
     *         )
     *     )
     * )
     */
    public function get_link($id)
    {
        $link = Link::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        if ($link) {
            return response()->json([
                'success' => true,
                'response' => $link->load('tags', 'alerts'),
                'message' => 'Lien récupéré avec succès'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Lien non trouvé'
            ], 404);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/links",
     *     summary="Get all user links",
     *     tags={"Links"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="List of links retrieved successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="response", type="array", @OA\Items(ref="#/components/schemas/Link")),
     *             @OA\Property(property="message", type="string", example="Liste des liens récupérée avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Unauthenticated.")
     *         )
     *     )
     * )
     */
    public function user_links()
    {
        $links = Link::where('user_id', Auth::id())->paginate(10);
        return response()->json([
            'success' => true,
            'response' => $links,
            'message' => 'Liste des liens récupérée avec succès'
        ], 200);
    }

}
