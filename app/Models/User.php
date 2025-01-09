<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasFactory, HasApiTokens, Notifiable, InteractsWithMedia;
    /**
    * @OA\Schema(
    *     schema="User",
    *     type="object",
    *     @OA\Property(property="id", type="integer", example=1),
    *     @OA\Property(property="first_name", type="string", example="John"),
    *     @OA\Property(property="last_name", type="string", example="Doe"),
    *     @OA\Property(property="phone", type="string", example="1234567890"),
    *     @OA\Property(property="email", type="string", example="user@example.com"),
    *     @OA\Property(property="email_verified_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
    *     @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
    *     @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
    * )
    */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'role',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function links()
    {
        return $this->hasMany(Link::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function addProfilePhoto($file)
    {
        $this->clearMediaCollection('profile_photos');
        $this->addMedia($file)->toMediaCollection('profile_photos');
    }

}
