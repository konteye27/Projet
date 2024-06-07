<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Seance;
use App\Models\SalleClasse;

class SeanceController extends Controller
{
    public function methodeCreate()
    {
        $salles = SalleClasse::all();
        return view('Seances.createSeance', ['salles' => $salles]);
    }

    public function methodeStore(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'jour' => 'required|string',
            'heure_debut' => 'required|date_format:H:i',
            'heure_fin' => 'required|date_format:H:i|after:heure_debut',
            'salle_id' => 'required|exists:salle_classes,id',
        ]);

        Seance::methodeCreate([
            'date' => $request->date,
            'jour' => $request->jour,
            'heure_debut' => $request->heure_debut,
            'heure_fin' => $request->heure_fin,
            'salle_id' => $request->salle_id,
        ]);

        return redirect()->route('Seances.createSeance')->with('success', 'La séance a été ajoutée avec succès.');
    }
}
