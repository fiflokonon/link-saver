<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    /**
     * @OA\Schema(
     *     schema="Category",
     *     type="object",
     *     title="Category",
     *     required={"name"},
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         description="ID of the category"
     *     ),
     *     @OA\Property(
     *         property="name",
     *         type="string",
     *         description="Name of the category"
     *     ),
     *     @OA\Property(
     *          property="color",
     *          type="string",
     *          description="Color of the category"
     *      ),
     *      @OA\Property(
     *           property="icon",
     *           type="string",
     *           description="Icon of the category"
     *       ),
     *     @OA\Property(
     *         property="created_at",
     *         type="string",
     *         format="date-time",
     *         description="Creation timestamp"
     *     ),
     *     @OA\Property(
     *         property="updated_at",
     *         type="string",
     *         format="date-time",
     *         description="Last update timestamp"
     *     ),
     *     @OA\Property(
     *         property="deleted_at",
     *         type="string",
     *         format="date-time",
     *         description="Deletion timestamp"
     *     )
     * )
     */
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'color',
        'icon',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
