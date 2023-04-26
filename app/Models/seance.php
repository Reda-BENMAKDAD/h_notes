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
        'type'

    ];
    public function prof() {
        return $this->belongsTo(Prof::class);
    }

    public function module() {
        return $this->belongsTo(Module::class);
    }

    public function groupe() {
        return $this->belongsTo(Groupe::class);
    }

    use HasFactory;
}
