<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Nieuwsbrief;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;


class MailController extends Controller
{
    //Functie om een mail te verzenden
    public function mailSend(Request $request, $id)
    {
        $nieuwsbrief = Nieuwsbrief::find($id);
        $email = new TestMail($nieuwsbrief);
        foreach ($nieuwsbrief->medewerkers()->get() as $medewerker) {
            Mail::to($medewerker->email)->send($email);
        }
        $nieuwsbrief->verzenddatum = date('Y-m-d');
        $nieuwsbrief->verzondendatum = date('Y-m-d');
        $nieuwsbrief->status = "Verzonden";
        $nieuwsbrief->save();

        return response()->json([
            'message' => 'Mail has sent.'
        ], Response::HTTP_OK);
    }

    //Functie om een preview van een nieuwsbrief te laten zien
    public function previewMail(Request $request, $id)
    {
        $nieuwsbrieven = Nieuwsbrief::find($id);
        return new TestMail($nieuwsbrieven);
    }
}
