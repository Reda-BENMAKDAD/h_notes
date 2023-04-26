<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    use HasFactory;
    protected $table = 'modules';
    protected $primaryKey = 'id';
    protected $fillable = [
        'idFilliere',
        'idProfs',
        'nom',
        'masseHorraire',
    ];

    function filliere() {
        return this->belongsTo(filiere::class, 'idFilliere');
    }

    function profs() {
        return this->belongsTo(prof::class, 'idProfs');
    }
}
