<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prof extends Model
{
    protected $table = 'profs';
    protected $fillable = [
        'id',
        'nom',
        'prenom',
    ];
    use HasFactory;
}
