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
        $nieuwsbrieven = Nieuwsbrief::all();
        foreach ($nieuwsbrieven as $nieuwsbrief)
            if ($nieuwsbrief->status === 'Wachtrij') {
                if (date('Y-m-d', strtotime($nieuwsbrief->verzenddatum)) == date('Y-m-d')) {
                    $affected = DB::table('nieuwsbrieven')->whereDate('verzenddatum' , date('Y-m-d'))->where(['status'=> 'Wachtrij'])->update(['status' => 'Verzonden']);
                    $email = new TestMail($nieuwsbrief);
                    foreach ($nieuwsbrief->medewerkers()->get() as $medewerker) {
                        Mail::to($medewerker->email)->send($email);
                    }
                }
            }
    }
}
