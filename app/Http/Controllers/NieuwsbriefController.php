<?php

namespace App\Http\Controllers;

use App\Models\Medewerker;
use App\Models\MedewerkerNieuwsbrief;
use App\Models\Nieuwsbrief;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NieuwsbriefController extends Controller
{
    //Functie voor het opvragen van een overzicht van alle nieuwsbrieven.
    public function index(Request $request)
    {
        $nieuwsbrieven = Nieuwsbrief::all();
        return view('pages.overzicht', compact('nieuwsbrieven'), ['nieuwsbrieven' => $nieuwsbrieven]);
    }

    //Functie om naar de aanmaak pagina te gaan van de nieuwsbrief pagina.
    public function create()
    {
        return view('pages.nieuwsbrief');
    }

    // Opslaan van de basisgegevens van een nieuwsbrief. Geeft een redirect naar de bewerkpagina van de zojuist aangemaakte nieuwsbrief.
    public function store(Request $request)
    {
        $nieuwsbrieven = Nieuwsbrief::create([
            'naam' => $request->naam,
            'afzender' => $request->afzender,
            'email' => $request->email,
            'template_id' => $request->template_id,
        ]);

        return response()->redirectToRoute('pages.bewerknieuwsbrief', ['id' => $nieuwsbrieven->id]);
    }

    //Functie voor het opvragen van medewerkers en de specifieke nieuwsbrief.
    public function edit($id)
    {
        $medewerkers = Medewerker::all();
        $nieuwsbrieven = Nieuwsbrief::find($id);
        return view('pages.bewerknieuwsbrief', compact('nieuwsbrieven', 'medewerkers'));
    }

    //Functie die een bestaande nieuwsbrief bewerkt met nieuwe informatie. Na het opslaan gaat hij terug naar de overzichten pagina.
    public function update(Request $request, $id)
    {
        $nieuwsbrieven = Nieuwsbrief::find($id);
        $nieuwsbrieven->naam = $request->get('naam');
        $nieuwsbrieven->afzender = $request->get('afzender');
        $nieuwsbrieven->email = $request->get('email');
        $nieuwsbrieven->inhoud = $request->get('inhoud');
        $nieuwsbrieven->leesbevestiging = $request->get('leesbevestiging');
        $nieuwsbrieven->verzenddatum = $request->get('verzenddatum');
        //Als er een verzenddatum is ingesteld en het niet 'Verzonden' is de status aanpassen naar 'Wachtrij'.
        if (isset($nieuwsbrieven->verzenddatum)) {
            if ($nieuwsbrieven->status != 'verzonden') {
                $nieuwsbrieven->status = 'wachtrij';
            }
        }
        $nieuwsbrieven->medewerkers()->sync($request->input('medewerkers'));
        $nieuwsbrieven->save();
        return response()->redirectToRoute('pages.overzicht');
    }

    //Functie voor het verwijderen van een nieuwsbrief.
    public function destroy($id)
    {
        $nieuwsbrieven = Nieuwsbrief::find($id);
        $nieuwsbrieven->delete();
        return response()->redirectToRoute('pages.overzicht');
    }
}
