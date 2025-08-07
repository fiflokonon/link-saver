<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
    use SoftDeletes;
    /**
     * @OA\Schema(
     *     schema="Link",
     *     type="object",
     *     title="Link",
     *     required={"url", "title", "user_id", "category_id"},
     *     @OA\Property(
     *         property="url",
     *         type="string",
     *         description="URL of the link"
     *     ),
     *     @OA\Property(
     *         property="title",
     *         type="string",
     *         description="Title of the link"
     *     ),
     *     @OA\Property(
     *         property="note",
     *         type="string",
     *         description="Note about the link"
     *     ),
     *     @OA\Property(
     *         property="is_favorite",
     *         type="boolean",
     *         description="Indicates if the link is a favorite"
     *     ),
     *     @OA\Property(
     *         property="is_archived",
     *         type="boolean",
     *         description="Indicates if the link is archived"
     *     ),
     *     @OA\Property(
     *         property="user_id",
     *         type="integer",
     *         description="ID of the user who owns the link"
     *     ),
     *     @OA\Property(
     *         property="category_id",
     *         type="integer",
     *         description="ID of the category the link belongs to"
     *     )
     * )
     */
    protected $table = 'links';
    protected $fillable = [
        'url',
        'title',
        'note',
        'is_favorite',
        'is_archived',
        'user_id',
        'category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function visits()
    {
        return $this->morphMany(LinkVisit::class, 'linkable');
    }


}
