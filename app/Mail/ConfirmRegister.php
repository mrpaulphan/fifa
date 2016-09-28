<?php

namespace App\Mail;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmRegister extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function generateToken() {
        $token = str_random(38);
        return $token;
     }
    public function build(Request $request)
    {
        // generate token
        $token = $this->generateToken();

        return $this->from('example@example.com')
               ->view('emails.register')
               ->with('token', $token);
    }
}
