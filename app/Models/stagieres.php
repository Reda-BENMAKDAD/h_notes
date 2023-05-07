<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagieres extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom','idgroupe', 'user_id', 'pp_path'];

    public function groupes()
    {
        return $this->belongsTo(Groupes::class, 'idgroupe');
    }

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
