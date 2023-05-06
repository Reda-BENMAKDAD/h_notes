<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $table = 'modules';
    protected $fillable = [
        'idFilliere',
        'nom',
        'masseHorraire',
        'idProf',
    ];

    function filliere() {
        return $this->belongsTo(Filliere::class, 'idFilliere');
    }

    function profs() {
        return $this->belongsTo(Prof::class, 'idProf');
    }
}
