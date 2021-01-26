<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use resources\views;


class Email extends Mailable
{
    use Queueable, SerializesModels;
    public $randOb;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($randOb)
    {
        //
        $this->randOb=$randOb;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      //dd($randOb);
      return $this->from('shagor1994@gmail.com')
                    ->view('email/emailLayout');
    }
}
