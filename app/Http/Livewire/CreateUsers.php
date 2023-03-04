<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Utilisateur;
use App\Models\User;

class CreateUsers extends Utilisateur
{
    
    public function render()
    {
        return view('livewire.utilisateurs.create',
        [
            "Users"=>User::all()
        ])
            ->extends('master')
            ->section('content');  
    }
}
