<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedewerkerNieuwsbrief extends Model
{
    use HasFactory;
    protected $table = 'medewerker_nieuwsbrief';

    public function nieuwsbrief(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Nieuwsbrief');
    }

    public function Medewerker(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Medewerker');
    }
}
