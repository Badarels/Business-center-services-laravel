<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(users::class);
    }

    public function Campagne(){
        return $this->belongsTo(Campagne::class);
    }

    public function Fichier(){
        return $this->hasMany(Fichier::class);
    }
    public function Appel(){
        return $this->hasMany(Appel::class);
    }

    public function Vente(){
        return $this->hasMany(Vente::class);
    }

}
