<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    //
    public function listeUtilisateur(){
        return view("layouts.ListeUtilisateur");
    }
}