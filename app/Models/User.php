<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = [];

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


    public function loansGiven(): HasMany
    {
        return $this->hasMany(Loan::class, 'owner_id');
    }

    /**
     * Leningen die door de gebruiker zijn ontvangen.
     */
    public function loansReceived(): HasMany
    {
        return $this->hasMany(Loan::class, 'loaner_id');
    }

    public function ownedPots()
    {
        return $this->hasMany(Pot::class, 'owner_id');
    }

    public function pots()
    {
        return $this->belongsToMany(Pot::class, 'pot_user')
            ->withPivot('total_contributed', 'last_contribution')
            ->withTimestamps();
    }

    public function contributions()
    {
        return $this->hasMany(Contribution::class);
    }


}
