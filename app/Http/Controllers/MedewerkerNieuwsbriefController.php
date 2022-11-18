<?php

namespace App\Http\Controllers;

use App\Models\Medewerker;
use App\Models\MedewerkerNieuwsbrief;
use App\Models\Nieuwsbrief;
use Illuminate\Http\Request;

class MedewerkerNieuwsbriefController extends Controller
{
    public function index(Request $request)
    {
        $medewerkernieuwsbrieven = MedewerkerNieuwsbrief::all();
        return view('pages.medewerkersoverzicht', compact('medewerkernieuwsbrieven'), ['medewerkernieuwsbrieven' => $medewerkernieuwsbrieven]);
    }
}
