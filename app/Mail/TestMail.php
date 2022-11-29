<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailQueue;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailQueue)
    {
        $this->mailQueue = $mailQueue;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->subject('TestMail 4')->markdown('pages.testmail')
            ->with('mailQueue', $this->mailQueue);
    }
}
