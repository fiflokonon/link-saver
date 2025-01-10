<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{

    /**
     * @OA\Post(
     *     path="/api/tags",
     *     summary="Create a new tag",
     *     tags={"Tags"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string", example="example tag")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Tag created successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="response", ref="#/components/schemas/Tag"),
     *             @OA\Property(property="message", type="string", example="Tag ajouté avec succès")
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:tags,name,NULL,id,user_id,' . Auth::id(),
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

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

    /**
     * @OA\Put(
     *     path="/api/tags/{id}",
     *     summary="Update an existing tag",
     *     tags={"Tags"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID of the tag to update"
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string", example="updated tag")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Tag updated successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="response", ref="#/components/schemas/Tag"),
     *             @OA\Property(property="message", type="string", example="Tag modifié avec succès")
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
        $tag = Tag::where('user_id', Auth::id())->findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:tags,name,NULL,id,user_id,' . Auth::id(),
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $tag->update([
            'name' => $request->name,
        ]);

        return response()->json([
            'success' => true,
            'response' => $tag,
            'message' => 'Tag modifié avec succès',
        ], 200);
    }


    /**
     * @OA\Delete(
     *     path="/api/tags/{id}",
     *     summary="Delete a tag",
     *     tags={"Tags"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID of the tag to delete"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Tag deleted successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="message", type="string", example="Tag supprimé avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Tag not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Tag non trouvé")
     *         )
     *     )
     * )
     */
    public function destroy($id)
    {
        $tag = Tag::where('user_id', Auth::id())->findOrFail($id);

        $tag->delete();

        return response()->json([
            'success' => true,
            'message' => 'Tag supprimé avec succès',
        ], 200);
    }

    /**
     * @OA\Get(
     *     path="/api/tags",
     *     summary="Get all tags",
     *     tags={"Tags"},
     *     @OA\Response(
     *         response=200,
     *         description="Tags and their links retrieved successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="response", type="array", @OA\Items(ref="#/components/schemas/Tag")),
     *             @OA\Property(property="message", type="string", example="Tags et leurs liens récupérés avec succès")
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


    /**
     * @OA\Get(
     *     path="/api/tags/{id}/links",
     *     summary="Get links by tag",
     *     tags={"Tags"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID of the tag to retrieve links for"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Links retrieved successfully for the specified tag",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="response", type="object",
     *                 @OA\Property(property="tag", ref="#/components/schemas/Tag"),
     *                 @OA\Property(property="links", type="array", @OA\Items(ref="#/components/schemas/Link"))
     *             ),
     *             @OA\Property(property="message", type="string", example="Liens récupérés avec succès pour le tag spécifié")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Tag not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Tag non trouvé")
     *         )
     *     )
     * )
     */
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
