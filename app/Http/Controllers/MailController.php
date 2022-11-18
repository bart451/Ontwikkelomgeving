<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Nieuwsbrief;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;


class MailController extends Controller
{
    public function mailSend(Request $request, $id)
    {
        $nieuwsbrieven = Nieuwsbrief::find($id);
        $email = $nieuwsbrieven->email;
        $mailInfo = [
            "naam" => $nieuwsbrieven->naam,
            "afzender" => $nieuwsbrieven->afzender,
            "email" => $nieuwsbrieven->email,
            "inhoud" => $nieuwsbrieven->inhoud,
        ];

        Mail::to($email)->send(new TestMail($mailInfo));

        return response()->json([
            'message' => 'Mail has sent.'
        ], Response::HTTP_OK);
    }

}
