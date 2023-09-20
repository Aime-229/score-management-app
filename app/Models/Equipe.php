<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'logo'];

    public function Joueurs(){
        return $this->hasMany(Joueur::class);
    }
    
    public function Equipes(){
        return $this->belongsToMany(Equipe::class);
    }
}
