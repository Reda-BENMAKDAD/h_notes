<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupes extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'idFiliere'];
    public $timestamps = false;

    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'idFiliere');
    }
}
