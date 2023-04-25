<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seance extends Model
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
        return $this->belongsTo(prof::class);
    }

    public function module() {
        return $this->belongsTo(module::class);
    }

    public function groupe() {
        return $this->belongsTo(groupe::class);
    }

    use HasFactory;
}
