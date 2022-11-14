<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Nieuwsbrief extends Model
{
    use HasFactory;


    // Definiëren van tabelnaam in de database.
    protected $table = 'nieuwsbrieven';
    protected $fillable = ['naam', 'afzender', 'email' , 'template_id'];

    public function medewerkers()
    {
        return $this->belongsToMany(Medewerker::class,'medewerker_nieuwsbrief');
    }
}
