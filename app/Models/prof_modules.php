<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof_modules extends Model
{
    protected $table = 'prof_modules';
    protected $fillable = [
        'idProf',
        'idModule',
    ];
    use HasFactory;
}
