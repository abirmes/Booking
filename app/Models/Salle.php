<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $fillable = [
        'number',
        'persan',
        'evaluation',
        'etat'
    ];


    public function user(){
        return $this->belongsToMany(User::class);
    }
}
