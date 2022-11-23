<?php

namespace App\Models;

use App\Models\Medewerker;
use App\Models\Template;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nieuwsbrief extends Model
{
    use HasFactory;

    // Definiëren van tabelnaam in de database.
    protected $table = 'nieuwsbrieven';
    protected $fillable = ['naam', 'afzender', 'email', 'template_id'];

    //De medewerkers die bij deze nieuwsbrieven horen
    public function medewerkers()
    {
        return $this->belongsToMany(Medewerker::class);
    }

    public function get_template()
    {
        return Template::find($this->template_id);
    }
    public function get_status()
    {
        return Nieuwsbrief::find($this->status);
    }
}
