<?php

namespace App\Console\Commands;

use App\Models\Nieuwsbrief;
use Illuminate\Console\Command;
use App\Mail\TestMail;
use Carbon\Carbon;
use Mail;
use DB;
use \Illuminate\Support\Facades;

class VerstuurEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:medewerkers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */

    //Command om nieuwsbrieven te versturen als hij op status wachtrij staat en de dag overheen komt met vandaag
    public function handle()
    {
        $nieuwsbrieven = Nieuwsbrief::whereDate('verzenddatum', '<=', date('Y-m-d'))->where(['status' => 'wachtrij'])->get();
        foreach ($nieuwsbrieven as $nieuwsbrief) {
            $email = new TestMail($nieuwsbrief);
            foreach ($nieuwsbrief->medewerkers()->get() as $medewerker) {
                $verzendemail = Mail::to($medewerker->email)->send($email);
                if ($verzendemail instanceof \Illuminate\Mail\SentMessage) {
                    $affected = DB::table('nieuwsbrieven')->whereDate('verzenddatum', '<=', date('Y-m-d'))->where(['status' => 'wachtrij'])->update(['status' => 'Verzonden']);
                } else {
                    echo "Email is niet verzonden!";
                }
            }
        }
    }
}
