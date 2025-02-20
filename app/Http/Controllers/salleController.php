<?php

namespace App\Http\Controllers;

use App\Models\Salle as ModelsSalle;
use Illuminate\Http\Request;
use Salle;

class salleController extends Controller
{
    public function index()
    {
        $salles = ModelsSalle::all();
        return view('salles', compact('salles'));
    }
    public function create()
    {
        $salles = ModelsSalle::create([
            'number' => 1,
            'persan' => 'third',
            'evaluation' => 'high',
            'etat' => 'disponible'
        ]);
    }

    public function update()
    {

    }
}
