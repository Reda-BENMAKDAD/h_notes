<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupeProf extends Model
{
    use HasFactory;
    protected $table = 'groupe_profs';
    protected $fillable = ['idProf', 'idGroupe'];


    public function profs(){
        return $this->belongsTo(Prof::class , 'idProf');
    }


    public function groupe(){
        return $this->belongsTo(groupes::class , 'idGroupe');
    }
}
