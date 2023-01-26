<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function Agent(){
        return $this->hasMany(Agent::class);
    }

    public function Administrateur(){
        return $this->hasMany(Administrateur::class);
    }
     public function role(){
            return $this->belongsToMany(Role::class, "users_roles","users_id","roles_id");
    }

   /* public function roles()
    {
        return $this->belongsToMany(Role::class);
    }*/
    public function Compte(){
        return $this->hasMany(Compte::class);
    }
    //permet de savoir le role d'un utilisateur
    public function hasRole($role){
        return $this->role()->where("detail_roles", $role)->first() !== null;
    }
   
    public function hasAnyRole($roles){
        return $this->role()->whereIn("detail_roles", $roles)->first() !== null;
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
