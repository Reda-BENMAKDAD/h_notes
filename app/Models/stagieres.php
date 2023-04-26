<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stagieres extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom','idgroupe'];

    public function groupes()
    {
        return $this->belongsTo(Groupes::class, 'idgroupe');
    }
}
