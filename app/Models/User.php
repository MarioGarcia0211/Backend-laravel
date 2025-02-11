<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'identification',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        //'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return $this->hasOne(Profile::class, 'fkuser', 'id');
    }

    public function taquillero(){
        return $this->hasManyThrough(Register::class, Profile::class, 'fkuser', 'fkprofiletaqui', 'id', 'id');
    }

    public function turista(){
        return $this->hasManyThrough(Register::class, Profile::class, 'fkuser', 'fkprofileturis', 'id', 'id');
    }

    public function pturis(){
        return $this->profile()->where('fkrol', '=', 3);

    }
}
