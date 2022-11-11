<?php

namespace App\Http\Controllers;

use App\Models\Nieuwsbrief;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class NieuwsbriefController extends Controller
{
    public function index(Request $request)
    {
        $nieuwsbrieven = Nieuwsbrief::all();
        return view('pages.overzicht', compact('nieuwsbrieven'), ['nieuwsbrieven' => $nieuwsbrieven]);
    }

    public function create()
    {
        return view('pages.nieuwsbrief');
    }

    public function store(Request $request)
    {
        $nieuwsbrieven = Nieuwsbrief::create([
            'naam' => $request->naam,
            'afzender' => $request->afzender,
            'email' => $request->email,
            'template_id' => $request->template_id,
        ]);
        return response()->redirectToRoute('pages.bewerknieuwsbrief', ['id' => $nieuwsbrieven->id]);
//        return redirect("pages/bewerknieuwsbrief/{$nieuwsbrieven->id}");
    }

    public function edit($id)
    {
//        dd($id);
        $nieuwsbrieven = Nieuwsbrief::find($id);
        return view('pages.bewerknieuwsbrief', compact('nieuwsbrieven'));
    }

    public function update(Request $request, $id)
    {
        $nieuwsbrieven = Nieuwsbrief::find($id);
        $nieuwsbrieven->naam = $request->get('naam');
        $nieuwsbrieven->afzender = $request->get('afzender');
        $nieuwsbrieven->email = $request->get('email');
        $nieuwsbrieven->inhoud = $request->get('inhoud');
        $nieuwsbrieven->status = $request->get('status');
        $nieuwsbrieven->save();

//        return view('pages.overzicht');
        return response()->redirectToRoute('pages.overzicht');
    }

    public function destroy($id)
    {
        $nieuwsbrieven = Nieuwsbrief::find($id);
        $nieuwsbrieven->delete();

        return response()->redirectToRoute('pages.overzicht');
    }
}
