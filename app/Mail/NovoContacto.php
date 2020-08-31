<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NovoContacto extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados)
    {
        $this->data = $dados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
                //dd($this->data->nome);
        return $this->markdown('backend.Emails.thanks')
                    ->with('data', $this->data);
    }
}
