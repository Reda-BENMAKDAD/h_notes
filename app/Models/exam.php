<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';
    protected $fillable = [
        'date',
        'type',
        'idModule',
        'libelle'
    ];

    public function module()
    {
        return $this->belongsTo(module::class, 'idModule');
    }
    use HasFactory;
}
