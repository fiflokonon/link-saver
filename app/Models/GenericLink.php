<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GenericLink extends Model
{
    use SoftDeletes;
    protected $table = 'generic_links';
    protected $fillable = [
        'title',
        'description',
        'url',
        'icon',
        'country_id',
        'user_id',
        'validation_status',
        'status'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
