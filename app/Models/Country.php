<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Country extends Model
{
    use SoftDeletes;

    protected $table = 'countries';
    protected $fillable = [
        'name',
        'code',
        'phone_code',
        'currency',
        'flag',
    ];

}
