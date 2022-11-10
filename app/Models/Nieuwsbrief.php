<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Nieuwsbrief extends Model
{
    use HasFactory;

    // Definieren van tabelnaam in de database.
    protected $table = 'nieuwsbrieven';

    protected $fillable = ['naam', 'afzender', 'email' , 'template_id'];
//    protected $fillable = ['id', 'naam', 'afzender', 'email', 'template_id', 'leesbevestiging', 'verzenddatum', 'verzondendatum', 'status', 'inhoud', 'created_by', 'created_at', 'updated_at', 'deleted_at'];
}
