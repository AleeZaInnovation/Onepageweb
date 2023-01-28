<?php

namespace App\Mail;

//use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceSend extends Mailable {
    use  SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details) {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->from('testmail@aniyanetworks.net')
            ->subject('SahaCpa Contact Us Form')
            ->view('mail.contuct-us-mail')
            ->with(['mail_body' => $this->details]);
    }
}
