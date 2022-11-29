<?php

namespace App\Console\Commands;

use App\Models\MailQueue;
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
        $mailQueues = MailQueue::whereDate('verzenddatum', '<=', date('Y-m-d'))->where(['status' => 'wachtrij'])->get();
        foreach ($mailQueues as $mailQueue) {
            $verzendemail = Mail::to($mailQueue->to_address)->send(new TestMail($mailQueue));
            if ($verzendemail instanceof \Illuminate\Mail\SentMessage) {
                $affected = DB::table('mail_queue')->whereDate('verzenddatum', '<=', date('Y-m-d'))->where(['status' => 'wachtrij'])->update(['status' => 'verzonden']);
                echo "Email is verzonden!";
            }
        }
        if (Mail::flushMacros() > 0) {
            echo "There was one or more failures. They were: <br />";
            foreach (Mail::failures() as $email_address) {
                echo " - $email_address <br />";
            }
        } else {
            echo "No errors, all sent successfully!";
        }
    }
}
