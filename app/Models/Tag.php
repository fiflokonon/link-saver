<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * @OA\Schema(
 *     schema="Tag",
 *     type="object",
 *     title="Tag",
 *     description="Tag model",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID of the tag"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Name of the tag"
 *     ),
 *     @OA\Property(
 *         property="status",
 *         type="string",
 *         description="Status of the tag"
 *     ),
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
 *         description="Update timestamp"
 *     ),
 *     @OA\Property(
 *         property="deleted_at",
 *         type="string",
 *         format="date-time",
 *         description="Deletion timestamp"
 *     )
 * )
 */
class Tag extends Model
{
    use SoftDeletes;
    protected $table = 'tags';
    protected $fillable = [
        'name',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relation many-to-many avec les liens.
     */
    public function links()
    {
        return $this->belongsToMany(Link::class, 'link_tags')->withTimestamps();
    }

}
