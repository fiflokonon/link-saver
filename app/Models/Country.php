<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = [
        'name',
        'code',
        'continent_id',
        'flag'
    ];

    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }


}
