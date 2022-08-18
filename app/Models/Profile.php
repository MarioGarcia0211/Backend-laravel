<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'fkuser',
        'fkrol',
        'user'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'fkuser', 'id');
    }

    public function rol(){
        return $this->belongsTo(Rol::class, 'fkrol', 'id');
    }

    public function registerTaqui(){
        return $this->hasMany(Register::class, 'fkprofiletaqui', 'id');
    }

    public function registerTuris(){
        return $this->hasMany(Register::class, 'fkprofileturis', 'id');
    }
}
