<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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

    public function profile():HasOne
    {
        return $this->hasOne(Profile::class);
    }


    //tinkar with user table field name querry and change value (with using name properties).
    protected function name():Attribute
    {
        return Attribute::make(            
            get: fn(string $value) => strtoupper($value),
            set: fn(string $value) => strtolower($value),
        );

    }
    protected function getnameemailAtribute()
    {
        return $this->name . ' (' . $this->email.')';

    }
    protected function comments():HasMany
    {
        return $this->hasMany(Comment::class);

    }
}
