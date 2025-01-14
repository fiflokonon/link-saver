<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    use HasFactory;
    /**
     * @OA\Schema(
     *     schema="Alert",
     *     type="object",
     *     title="Alert",
     *     description="Alert model",
     *     @OA\Property(property="id", type="integer", example=1),
     *     @OA\Property(property="link_id", type="integer", example=1),
     *     @OA\Property(property="reminder_at", type="string", format="date-time", example="2023-12-01T12:00:00Z"),
     *     @OA\Property(property="message", type="string", example="This is a reminder message."),
     *     @OA\Property(property="status", type="boolean", example=true)
     * )
     */
    protected $table = 'alerts';
    protected $fillable = [
        'link_id',
        'reminder_at',
        'message',
        'status', // Indique si l'alerte est active
    ];

    public function link()
    {
        return $this->belongsTo(Link::class);
    }
}
