<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/categories",
     *     summary="Get categories and their links",
     *     tags={"Categories"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Categories and their links retrieved successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="success",
     *                 type="boolean"
     *             ),
     *             @OA\Property(
     *                 property="response",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/Category")
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string"
     *             )
     *         )
     *     )
     * )
     */
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

    /**
     * @OA\Post(
     *     path="/api/categories",
     *     summary="Create a new category",
     *     tags={"Categories"},
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="name",
     *                 type="string",
     *                 description="Name of the category"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Category created successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="success",
     *                 type="boolean"
     *             ),
     *             @OA\Property(
     *                 property="response",
     *                 ref="#/components/schemas/Category"
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string"
     *             )
     *         )
     *     )
     * )
     */
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

    /**
     * @OA\Put(
     *     path="/api/categories/{id}",
     *     summary="Update an existing category",
     *     tags={"Categories"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID of the category to update"
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="name",
     *                 type="string",
     *                 description="Name of the category"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Category updated successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="success",
     *                 type="boolean"
     *             ),
     *             @OA\Property(
     *                 property="response",
     *                 ref="#/components/schemas/Category"
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string"
     *             )
     *         )
     *     )
     * )
     */
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

    /**
     * @OA\Delete(
     *     path="/api/categories/{id}",
     *     summary="Delete a category",
     *     tags={"Categories"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID of the category to delete"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Category deleted successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="success",
     *                 type="boolean"
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string"
     *             )
     *         )
     *     )
     * )
     */
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

    /**
     * @OA\Get(
     *     path="/api/categories/{id}/links",
     *     summary="Get links by category",
     *     tags={"Categories"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID of the category"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Links retrieved successfully for the specified category",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="success",
     *                 type="boolean"
     *             ),
     *             @OA\Property(
     *                 property="response",
     *                 type="object",
     *                 @OA\Property(
     *                     property="category",
     *                     ref="#/components/schemas/Category"
     *                 ),
     *                 @OA\Property(
     *                     property="links",
     *                     type="array",
     *                     @OA\Items(ref="#/components/schemas/Link")
     *                 )
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string"
     *             )
     *         )
     *     )
     * )
     */
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
