<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Lead;

class SendNewLead extends Mailable
{
    use Queueable, SerializesModels;

    //creazione variabile
    public $lead;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Lead $lead)
    {
        //popoliamo la variabile dal dato che arriva
        //da AdmissionController@save
        $this->lead = $lead;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //ritorno la view di feedback
        return $this->view('mail.lead_mail');
    }
}
