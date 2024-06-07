<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloc extends Model
{

    protected $fillable = ['nom', 'site'];

    // Relation avec les salles de classe
    public function salles()
    {
        return $this->hasMany(SalleClasse::class);
    }


}
