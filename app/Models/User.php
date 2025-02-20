<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];


    public function role(){
        return $this->hasOne(Role::class);
    }

    public function salle(){
        return $this->belongsToMany(Salle::class);
    }
}
