<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classe;


public  function addClasse(Request $request)
{
    $classe = new Classe();
    $classe->filiere = $request->input('filiere');
    $classe->niveau = $request->input('niveau');
    $classe->effectif = $request->input('effectif');
    $classe->save();

    return redirect('/Model.classe')->with('status', 'Classe ajoutée avec succès!');
}
