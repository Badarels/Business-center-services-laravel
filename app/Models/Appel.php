<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appel extends Model
{
    use HasFactory;

    public function Agent(){
        return $this->belongsTo(Agent::class);
    }

    public function RendVous(){
        return $this->belongsTo(RendezVous::class);
    }
}
