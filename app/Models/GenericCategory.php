<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GenericCategory extends Model
{
    use SoftDeletes;
    protected $table = 'generic_categories';
    protected $fillable = [
        'name',
        'description',
        'icon',
        'status'
    ];

    public function links()
    {
        return $this->hasMany(GenericLink::class, 'category_id');
    }
}
