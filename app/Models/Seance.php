

<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $fillable = ['date', 'jour', 'heure_debut', 'heure_fin', 'salle_id'];

    // Relation avec la salle de classe

    public function salleClasse()
    {
        return $this->belongsTo(SalleClasse::class, 'salle_id');
    }
}
