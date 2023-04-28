<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeExam extends Model
{
    protected $table = 'type_exams';
    protected $fillable = ['libelle'];

    public function exams(){
        return $this->belongsTo(exam::class);
    }

    use HasFactory;
}
