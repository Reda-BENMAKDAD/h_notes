<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class absence extends Model
{
    protected $table = 'absences';
    protected $fillable = [
        'idStagiaire',
        'idSeance',
        'typeAbsence',
    ];

    public function stagiaire()
    {
        return $this->belongsTo(Stagieres::class, 'idStagiaire');
    }

    public function seance()
    {
        return $this->belongsTo(Seance::class, 'idSeance');
    }
    use HasFactory;
}
