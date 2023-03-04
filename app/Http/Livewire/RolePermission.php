<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;


class RolePermission extends Component
{
    public $editUsers= [];

    public $showModal=false;

    public $selectedUser;

    public $selectedEmail;
    
    public $utilisateur=[];
    public function render()
    {
        //return view('livewire.role-permission',
        return view('livewire.utilisateurs.Role',
        [
            "Users"=>User::all()
        ])
            ->extends('master')
            ->section('content');    
    }
    public function rules(){
        
            return [
               // 'editUsers.email' => ['required', 'email', Rule::unique("users","email")->ignore($this->editUsers['id'])],
                'editUsers.password'=> 'required',
                'editUsers.password2'=> 'required',
                'selectedUser'=>'required',
            ];
    }

    public function updatePassword(){

        $user_name =$this->selectedUser; // Récupérer le nom complet de l'utilisateur sélectionné dans la liste déroulante
        $name_parts = explode(' ', $user_name); // Diviser le nom complet en nom et prénom
        $name = $name_parts[0]; // Récupérer le nom
        $firstname = $name_parts[1]; // Récupérer le prénom

        //$user = User::where('nom', 'like', '%' .$name. '%')->where('prenom', 'like', '%' .$firstname . '%')->first(); // Rechercher l'utilisateur par nom et prénom
        $users = User::where('email','like','%'.$this->selectedEmail.'%')->first();
      
        $user_id = $users->id; // Récupérer l'id de l'utilisateur

        //verifier si les informations envoyées par le formulaire sont correcte!
        $validationAttributes = $this->validate();
        //dump($validationAttributes);

        //Modifeir un utilisateur!!
         User::find($users->id)->update($validationAttributes["editUsers"]);

     $this->dispatchBrowserEvent("showsuccessMessage",["message"=>"Utilisateurs Modifier avec succès !!"]);
    }

    public function showCreateModal()
    {
       //return view('livewire.utilisateurs.ReinitilaiserPassword');
       $this->resetValidation();
       $this->reset();
      $this->showModal=true;

    }
}