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
    public function handle()
    {
        $today = Carbon::now()->toDateString();
        $nieuwsbrief = DB::table('nieuwsbrieven')->whereDate('verzenddatum', $today)->get()->toArray();
        $email = new TestMail($nieuwsbrief);
        Mail::to('receiver email address')->send($email);
    }
}
