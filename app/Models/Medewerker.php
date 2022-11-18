<?php

namespace App\Models;

use App\Models\Nieuwsbrief;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medewerker extends Model
{
    use HasFactory;

    //De nieuwsbrieven die bij deze medewerker horen
    public function nieuwsbrieven()
    {
        return $this->belongsToMany(Nieuwsbrief::class, 'medewerker_nieuwsbrief');
    }
}
