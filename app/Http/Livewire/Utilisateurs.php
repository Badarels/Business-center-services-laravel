<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Utilisateurs extends Component
{
    public $isBtnAddClicked = false;
  

    public $newUsers= [];

    protected $rules=[
        '$newUsers.nom'=> 'required',
        '$newUsers.prenom'=> 'required',
        '$newUsers.email'=> 'required | email',
        '$newUsers.sexe'=> 'required',
        '$newUsers.numeroPieceidentite'=> 'required',
        '$newUsers.datenaissance'=> 'required',
        '$newUsers.roles'=> 'required',
        '$newUsers.motdepasse'=> 'required',
        '$newUsers.telephone1'=> 'required',
        
    ];
    public function render()
    {
        return view('livewire.utilisateurs.index',[
            "Users"=>User::all()

        ])
            ->extends('master')
            ->section('content');         
    }

    public function AjouterUsers(){
        
        $this->isBtnAddClicked = true;  
       echo "Bonjour les amis";     
    }
    public function addUser(){
        
        //verifier si les informations envoyées par le formulaire sont correcte!
        $this->validate();
        //ajouter une nouvelle utilisateur!!
        dump($this->newUser);
    }

    public function submit()
    {
        $validatedData = $this->validate([
            '$newUsers.nom'=> 'required',
            '$newUsers.prenom'=> 'required',
            '$newUsers.email'=> 'required|email|unique:users,email',
            '$newUsers.sexe'=> 'required',
            '$newUsers.numeroPieceidentite'=> 'required',
            '$newUsers.datenaissance'=> 'required',
            '$newUsers.roles'=> 'required',
            '$newUsers.motdepasse'=> 'required',
            '$newUsers.telephone1'=> 'required',
        ]);

        User::create($validatedData);

        session()->flash('success', 'Utilisateur créé avec succès !');
    }
}
