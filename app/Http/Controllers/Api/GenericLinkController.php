<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GenericLink;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use OpenApi\Annotations as OA;

class GenericLinkController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/countries/{countryId}/links",
     *     summary="Récupérer les liens par pays",
     *     description="Retourne la liste paginée des liens génériques filtrés par pays et optionnellement par catégorie",
     *     operationId="getLinksByCountry",
     *     tags={"Links"},
     *     @OA\Parameter(
     *         name="countryId",
     *         in="path",
     *         description="ID du pays",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Parameter(
     *         name="category_id",
     *         in="query",
     *         description="ID de la catégorie (optionnel)",
     *         required=false,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="Numéro de page pour la pagination",
     *         required=false,
     *         @OA\Schema(type="integer", default=1)
     *     ),
     *     @OA\Parameter(
     *         name="per_page",
     *         in="query",
     *         description="Nombre d'éléments par page",
     *         required=false,
     *         @OA\Schema(type="integer", default=15)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Liste des liens récupérés avec succès",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="response", type="object",
     *                 @OA\Property(property="current_page", type="integer"),
     *                 @OA\Property(property="data", type="array", @OA\Items(
     *                     @OA\Property(property="id", type="integer"),
     *                     @OA\Property(property="title", type="string"),
     *                     @OA\Property(property="description", type="string"),
     *                     @OA\Property(property="url", type="string"),
     *                     @OA\Property(property="icon", type="string"),
     *                     @OA\Property(property="category", type="object"),
     *                     @OA\Property(property="country", type="object")
     *                 )),
     *                 @OA\Property(property="first_page_url", type="string"),
     *                 @OA\Property(property="from", type="integer"),
     *                 @OA\Property(property="last_page", type="integer"),
     *                 @OA\Property(property="last_page_url", type="string"),
     *                 @OA\Property(property="next_page_url", type="string", nullable=true),
     *                 @OA\Property(property="path", type="string"),
     *                 @OA\Property(property="per_page", type="integer"),
     *                 @OA\Property(property="prev_page_url", type="string", nullable=true),
     *                 @OA\Property(property="to", type="integer"),
     *                 @OA\Property(property="total", type="integer")
     *             ),
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(property="success", type="boolean")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pays non trouvé"
     *     )
     * )
     *
     * Récupérer les liens par pays et optionnellement par catégorie avec pagination
     */
    public function links_by_country(int $countryId, Request $request)
    {
        $perPage = $request->input('per_page', 15);

        $query = GenericLink::with(['category', 'country'])
            ->where('country_id', $countryId)
            ->where('status', 1)
            ->where('validation_status', 'approved');

        // Filtrage optionnel par catégorie
        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $links = $query->paginate($perPage);

        return response()->json([
            'response' => $links,
            'message' => 'Links retrieved successfully',
            'success' => true
        ]);
    }
}
