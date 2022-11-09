<?php

namespace App\Http\Controllers;

use App\Models\Nieuwsbrief;
use App\Models\NieuwsbriefSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class NieuwsbriefController extends Controller
{
    public function index(Request $request)
    {
        $nieuwsbrieven = Nieuwsbrief::all();
        return view('pages.overzicht', [
            'nieuwsbrieven' => $nieuwsbrieven
        ]);
    }
    public function save() {
        $data = Nieuwsbrief::hasData();
        return view('pages.overzicht', [
            'data' => $data
        ]);
    }
    public function getData(Request $request) {
        $onderwerp = $request->input('naam');
        $template = $request->input('template_id');
        $afzender = $request->input('afzender');
        $email = $request->input('email');

        Session::put($onderwerp, $template, $afzender, $email);
        Session::save();

        $data = array('naam'=>$onderwerp, 'template_id'=>$template, 'afzender'=>$afzender, 'email'=>$email);
        DB::table('nieuwsbrieven')->insert($data);
        return view('pages.overzicht');
    }
}
