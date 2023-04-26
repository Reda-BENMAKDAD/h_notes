<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    use HasFactory;
    protected $primaryKey = 'idnote';
    protected $fillable = ['valeur', 'idstagiere','idexam'];

    public function stagieres()
    {
        return $this->belongsTo(stagieres::class, 'idstagiere');
    }
    public function exam()
    {
        return $this->belongsTo(exam::class, 'idexam');
    }
}
