<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    use HasFactory;
    protected $table = 'filliere';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom',
    ];

    public function module() {
        return this->hasMany(module::class);
    }

    public function groupe() {
        return this->hasMany(groupe::class);
    }
}
