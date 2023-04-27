<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filliere extends Model
{
    use HasFactory;
    protected $table = 'fillieres';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom',
    ];

    public function module() {
        return $this->hasMany(Module::class);
    }

    public function groupe() {
        return $this->hasMany(Groupes::class);
    }
}
