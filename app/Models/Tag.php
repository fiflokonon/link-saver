<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
