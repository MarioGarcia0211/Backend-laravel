<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'amount',
        'fkprofiletaqui',
        'fkprofileturis'
    ];

    public function profiletaqui(){
        return $this->belongsTo(Profile::class, 'fkprofiletaqui', 'id');
    }

    public function profileturis(){
        return $this->belongsTo(Profile::class, 'fkprofileturis', 'id');
    }

    // public function profiletaqui(){
    //     return $this->belongsTo(Profile::class, 'fkprofiletaqui', 'id');
    // }

    // public function profileturis(){
    //     return $this->belongsTo(Profile::class, 'fkprofileturis', 'id');
    // }

    public function user(){
        return $this->belongsToThrough(User::class, Profile::class);
    }

}
