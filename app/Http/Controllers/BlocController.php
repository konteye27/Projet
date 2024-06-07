<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloc;

class BlocController extends Controller
{

    public function methodeCreate()
    {
        return view('Bloc.createBloc');
    }

    public function methodeStore(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'site' => 'required|string',
        ]);

        Bloc::methodeCreate([
            'nom' => $request->nom,
            'site' => $request->site,
        ]);

        return redirect()->route('Bloc.createBloc')->with('success', 'Le bloc a été ajouté avec succès.');
    }
}


