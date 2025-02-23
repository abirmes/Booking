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
        return view('salles', ['salles' => $salles]);
    }
    
    public function create(Request $request)
    {
        

        $salle =  ModelsSalle::create([
            'number' => $request->number,
            'persan' => $request->persan,
            'evaluation' => $request->evaluation,
            'etat' => 'disponible'
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $salle = ModelsSalle::find($id);
        return view('/supdate',['salle' => $salle]);
    }

    public function update(Request $request)
    {
        // dd($request->all());
        

        $salle = ModelsSalle::find($request->all()['id']);
        $salle->number = $request->all()['number'];
        $salle->persan = $request->all()['persan'];
        $salle->evaluation = $request->all()['evaluation'];
        $salle->etat = $request->all()['etat'];
        $salle->save();
        // dd($salle);


        return redirect()->route('salleController.index');
        
    }

    public function delete(int $id)
    {
        $salle = ModelsSalle::find($id);
        $salle->delete();
        return redirect()->back();
    }
}
