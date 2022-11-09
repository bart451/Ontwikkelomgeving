<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Nieuwsbrief extends Model
{
    use HasFactory;

    public function hasData() {
        $onderwerp = Session::get('naam');
        $template = Session::get('template_id');
        $afzender = Session::get('afzender');
        $email = Session::get('email');

        if ($onderwerp !== null && $template !== null && $afzender !== null && $email !== null) {
            return true;
        } else {
            return false;
        }
    }
}
//class NieuwsbriefSession {
//    public function hasData() {
//        $onderwerp = Session::get('naam');
//        $template = Session::get('template_id');
//        $afzender = Session::get('afzender');
//        $email = Session::get('email');
//
//        if ($onderwerp !== null && $template !== null && $afzender !== null && $email !== null) {
//            return true;
//        } else {
//            return false;
//        }
//    }
//}
