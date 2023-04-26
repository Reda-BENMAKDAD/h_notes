<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    protected $table = 'profs';
    protected $fillable = [
        'id',
        'nom',
        'prenom',
    ];

    public function modules(){
        return $this->hasMany(Module::class);
    }
    public function seances(){
        return $this->hasMany(Seance::class);
    }
    use HasFactory;
}
