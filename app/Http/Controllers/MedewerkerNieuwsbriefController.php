<?php

namespace App\Http\Controllers;

use App\Models\MedewerkerNieuwsbrief;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedewerkerNieuwsbriefController extends Controller
{
    public function index(Request $request)
    {
        $medewerkernieuwsbrieven = MedewerkerNieuwsbrief::all();
        return view('pages.medewerkersoverzicht', compact('medewerkernieuwsbrieven'), ['medewerkernieuwsbrieven' => $medewerkernieuwsbrieven]);
    }
}
