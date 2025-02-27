<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'card_id',
        'password',
        'birthdate',
        'gender',
        'phone',
        'email_verified_at',
        'user_type',
        'profile_photo_path',
        'photo',
    ];

    /**
     * Relacionamento com usuários
     * @return \Illuminate\Database\Eloquent\Relations\HasOne<Admin, User>
     */
    
    public function admin()
    {
        return $this->hasOne(Admin::class, 'user_id');
    }

    public function resident()
    {
        return $this->hasOne(Resident::class, 'user_id');
    }

    public function concierge()
    {
        return $this->hasOne(Concierge::class, 'user_id');
    }

    public function visitor()
    {
        return $this->hasOne(Visitor::class, 'user_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
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
}
