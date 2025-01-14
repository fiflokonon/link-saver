<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alert;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlertController extends Controller
{

    /**
     * @OA\Get(
     *     path="/alerts",
     *     summary="Get all alerts for the authenticated user",
     *     tags={"Alerts"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="List of alerts retrieved successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="response", type="array", @OA\Items(ref="#/components/schemas/Alert")),
     *             @OA\Property(property="message", type="string", example="Liste des alertes récupérée avec succès")
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
        $alerts = Alert::whereHas('link', function ($query) {
            $query->where('user_id', Auth::id());
        })->get();

        return response()->json([
            'success' => true,
            'response' => $alerts,
            'message' => 'Liste des alertes récupérée avec succès',
        ], 200);
    }

    /**
     * @OA\Post(
     *     path="/alerts",
     *     summary="Create a new alert",
     *     tags={"Alerts"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"link_id", "reminder_at", "message"},
     *             @OA\Property(property="link_id", type="integer", example=1),
     *             @OA\Property(property="reminder_at", type="string", format="date-time", example="2023-12-01T12:00:00Z"),
     *             @OA\Property(property="message", type="string", example="This is a reminder message.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Alert created successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="response", ref="#/components/schemas/Alert"),
     *             @OA\Property(property="message", type="string", example="Alerte ajoutée avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="errors", type="object"),
     *             @OA\Property(property="message", type="string", example="Erreur de validation")
     *         )
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Unauthorized or link not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Lien non trouvé ou non autorisé")
     *         )
     *     )
     * )
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'link_id' => 'required|exists:links,id',
                'reminder_at' => 'required|date|after:now',
                'message' => 'required|string',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors(),
                'message' => 'Erreur de validation',
            ], 422);
        }

        $link = Link::where('id', $validatedData['link_id'])->where('user_id', Auth::id())->first();

        if (!$link) {
            return response()->json([
                'success' => false,
                'message' => 'Lien non trouvé ou non autorisé',
            ], 403);
        }

        $alert = Alert::create($validatedData);

        return response()->json([
            'success' => true,
            'response' => $alert,
            'message' => 'Alerte ajoutée avec succès',
        ], 201);
    }

    /**
     * @OA\Put(
     *     path="/alerts/{id}",
     *     summary="Update an existing alert",
     *     tags={"Alerts"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID of the alert to update"
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"reminder_at", "message"},
     *             @OA\Property(property="reminder_at", type="string", format="date-time", example="2023-12-01T12:00:00Z"),
     *             @OA\Property(property="message", type="string", example="This is an updated reminder message.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Alert updated successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="response", ref="#/components/schemas/Alert"),
     *             @OA\Property(property="message", type="string", example="Alerte mise à jour avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="errors", type="object"),
     *             @OA\Property(property="message", type="string", example="Erreur de validation")
     *         )
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Unauthorized or alert not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Alerte non trouvée ou non autorisée")
     *         )
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'reminder_at' => 'required|date|after:now',
                'message' => 'required|string',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors(),
                'message' => 'Erreur de validation',
            ], 422);
        }

        $alert = Alert::whereHas('link', function ($query) {
            $query->where('user_id', Auth::id());
        })->findOrFail($id);

        $alert->update($validatedData);

        return response()->json([
            'success' => true,
            'response' => $alert,
            'message' => 'Alerte mise à jour avec succès',
        ], 200);
    }

    /**
     * @OA\Delete(
     *     path="/alerts/{id}",
     *     summary="Delete an alert",
     *     tags={"Alerts"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID of the alert to delete"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Alert deleted successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="message", type="string", example="Alerte supprimée avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Unauthorized or alert not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Alerte non trouvée ou non autorisée")
     *         )
     *     )
     * )
     */
    public function destroy($id)
    {
        $alert = Alert::whereHas('link', function ($query) {
            $query->where('user_id', Auth::id());
        })->findOrFail($id);

        $alert->delete();

        return response()->json([
            'success' => true,
            'message' => 'Alerte supprimée avec succès',
        ], 200);
    }

    /**
     * @OA\Put(
     *     path="/alerts/{id}/change-status",
     *     summary="Toggle the status of an alert",
     *     tags={"Alerts"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *         description="ID of the alert to toggle status"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Alert status updated successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="response", ref="#/components/schemas/Alert"),
     *             @OA\Property(property="message", type="string", example="Statut de l'alerte mis à jour avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Unauthorized or alert not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Alerte non trouvée ou non autorisée")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Alert is already obsolete",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="L'alerte est déjà obsolète")
     *         )
     *     )
     * )
     */
    public function change_status($id)
    {
        $alert = Alert::whereHas('link', function ($query) {
            $query->where('user_id', Auth::id());
        })->findOrFail($id);

        if ($alert->reminder_at < now()) {
            return response()->json([
                'success' => false,
                'message' => 'L\'alerte est déjà obsolète',
            ], 400);
        }

        $alert->update(['status' => !$alert->status]);

        return response()->json([
            'success' => true,
            'response' => $alert,
            'message' => 'Statut de l\'alerte mis à jour avec succès',
        ], 200);
    }

}
