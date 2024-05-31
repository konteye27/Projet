<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjouterRoleControler extends Controller
{
    //afficher le formulaire pour ajouter
    public function fome_ajouter(){
        return view('utilisateur.addUtilisateur');
    }
}
