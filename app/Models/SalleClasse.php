<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalleClasse extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'capacite', 'site'];

    // Exemple de relation avec un autre modèle
    public function bloc()
    {
        return $this->belongsTo(Bloc::class);
    }
    public function seance()
    {
        return $this->hasMany(Seance::class);
    }
}
