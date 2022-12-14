<?php

namespace App\Models;

use App\Models\Nieuwsbrief;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    public function inhoud()
    {
        return $this->belongsTo(Nieuwsbrief::class, 'inhoud', 'inhoud');
    }
}
