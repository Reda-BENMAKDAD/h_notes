<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $table = 'seances';
    protected $fillable = [
        'idProf',
        'idModule',
        'idGroupe',
        'date',
        'description',
        'type',
        'nom'

    ];
    public function prof() {
        return $this->belongsTo(Prof::class, 'idProf');
    }

    public function module() {
        return $this->belongsTo(Module::class, 'idModule');
    }

    public function groupe() {
        return $this->belongsTo(Groupes::class, 'idGroupe');
    }

    use HasFactory;
}
