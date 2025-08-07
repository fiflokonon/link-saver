<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LinkVisit extends Model
{
    protected $fillable = [
        'linkable_id',
        'linkable_type',
        'user_id',
        'visited_at',
        'user_agent',
        'ip_address',
    ];

    public function linkable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
