<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupes extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'idFilliere'];
    public $timestamps = false;

    public function filliere()
    {
        return $this->belongsTo(Filliere::class, 'idFilliere');
    }
}
