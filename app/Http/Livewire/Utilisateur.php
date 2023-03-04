<?php

namespace App\Http\Livewire;

use App\Models\Administrateur;
use App\Models\User;

use Illuminate\Validation\Rule;
use Livewire\Component;



class Utilisateur extends Component
{
   
    public $newUsers= [];
    public $editUsers= [];

    public $currentPages=PAGELIST;
    protected $messages=[
        'newUsers.nom.required'=>"le nom de l'utilisateur est requis"
    ];
   

    public function render()
    {
        return view('livewire.utilisateurs.index',
        [
            "Users"=>User::all()

        ])
            ->extends('master')
            ->section('content');      
    }

    public function rules(){
        
       
        if($this->currentPages == PAGEEDITFORM){
            return [
                'editUsers.nom'=> 'required',
                'editUsers.prenom'=> 'required',
                'editUsers.email' => ['required', 'email', Rule::unique("users","email")->ignore($this->editUsers['id'])],


                'editUsers.sexe'=> 'required',
                'editUsers.adresse'=> 'required',
                'editUsers.ville'=> 'required',
                'editUsers.numeroPieceIdentite'=> ['required', Rule::unique("users","numeroPieceIdentite")
                    ->ignore($this->editUsers['id'])],
                'editUsers.datenaissance'=> 'required',
                //'newUsers.roles'=> 'required',
                'editUsers.password'=> 'required',
                'editUsers.telephone1'=> ['required', Rule::unique("users","telephone1")
                    ->ignore($this->editUsers['id'])],
                'editUsers.telephone2'=> 'nullable',        
                
            ];
        }
        return [
            'newUsers.nom'=> 'required',
            'newUsers.prenom'=> 'required',
            'newUsers.email'=> 'required|email|unique:users,email',
            'newUsers.sexe'=> 'required',
            'newUsers.adresse'=> 'required',
            'newUsers.ville'=> 'required',
            'newUsers.numeroPieceIdentite'=> 'required|unique:users,numeroPieceIdentite',
            'newUsers.datenaissance'=> 'required',
            //'newUsers.roles'=> 'required',
            'newUsers.password'=> 'required',
            'newUsers.telephone1'=> 'required',
            'newUsers.telephone2'=> 'nullable',
        
        ];
    }

    public function goToUsers(){
        $this->currentPages = PAGECREATEFORM;  
    }
    public function goToListeUsers(){
        $this->currentPages=PAGELIST;  
        $this->editUsers=[];
    }
    public function goToEditUsers($id){
        $this->editUsers = User::find($id)->toArray();
        
        $this->currentPages=PAGEEDITFORM;
    }

    public function goToRole(){
        $this->currentPages=PAGEROLE;
        
    }

    
    public function addUser(){
        //verifier si les informations envoyées par le formulaire sont correcte!
        $validationAttributes = $this->validate();
        //ajouter une nouvelle utilisateur!!
        
              /*  if($this->newUsers['roles']['detail_roles']=='Administrateur'){
                    User::find($this->newUsers["id"])->role()->attach(2);
                }*/
         
                
        User::create($validationAttributes["newUsers"]);
        $this->newUsers=[];
        $this->dispatchBrowserEvent("showsuccessMessage",["message"=>"Utilisateurs créés avec succès !!"]);
    }

    public function updateUser(){
          //verifier si les informations envoyées par le formulaire sont correcte!
          $validationAttributes = $this->validate();
          //dump($validationAttributes);
        //Modifeir un utilisateur!!
        User::find($this->editUsers["id"])->update($validationAttributes["editUsers"]);

        $this->dispatchBrowserEvent("showsuccessMessage",["message"=>"Utilisateurs Modifier avec succès !!"]);
    }
    
    public function confimDelete($nom, $id){
        $this->dispatchBrowserEvent("showConfirmMessage",["message"=>[
            "text"=> "vous étes sur le point de supprimer l'utilisateur $nom de la liste, Voulez vous continuer?",
            "title"=>"Etes vous sure?",
            "type"=>"warning",
            "data"=> [
                "users_id"=>$id
            ]]
    ]);
        //$this->dispatchBrowserEvent("showConfirmMessage",["message"=>"vous étes sur le pint de supprimer l\'utilisateur $nom de la liste"]);
       
    }
    public function deleteUsers($id){
        User::destroy($id);
        $this->dispatchBrowserEvent("showsuccessMessage",["message"=>"Utilisateurs supprimé avec succès !!"]);
    }
   
}
