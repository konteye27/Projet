<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalleClasse;



class SalleClasseController extends Controller
{
    public function index()
    {
        // Récupérer toutes les salles de classe depuis le modèle
        $salles = SalleClasse::all();


        return view('Salles.index', ['salles' => $salles]);
    }

    //une autre fonction pour gérer l'enregistrement des salles de classes.
    public function methodeStore(Request $request)
{
    $request->validate([
        'nom' => 'required|string',
        'capacite' => 'required|string',
        'Bloc' => 'required|string',
        'site' => 'required|string',

    ]);

    $salles1  = new SalleClasse([
        'nom' => $request->input('nom'),
        'capacite' => $request->input('capacite'),
        'site' => $request->input('site'),
        'Bloc' => $request->input('Bloc'),

    ]);

    $salles1->save();

    return response()->json(['message' => 'Salle de classe enregistrée avec succès'], 201);
}

public function methodeCreateSalle()
{
    return view('Salles.createSalle');
}
}
