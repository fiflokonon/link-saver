<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LinkTag extends Model
{
    protected $table = 'link_tags';
    protected $fillable = [
        'link_id',
        'tag_id',
    ];
}
