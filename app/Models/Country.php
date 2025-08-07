<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Country extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $table = 'countries';
    protected $fillable = [
        'name',
        'code',
        'continent_id'
    ];

    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }
}
