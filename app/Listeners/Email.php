<?php

namespace App\Listeners;

use App\Events\ContactFormHasSent;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email implements ShouldQueue
{
    /**
     * Envío del correo de contacto
     *
     * @param ContactFormHasSent $event
     */
    public function contact(ContactFormHasSent $event)
    {
        //Enviar el correo al responsable
        $contact = $event->getContact();
        $subject = 'Contacto enviados desde pagina web';
        Mail::send('emails.contact', compact('contact', 'subject'),
            function ($m) use ($subject) {
                $m->to(env('MAIL_CONTACT_EMAIL'), env('MAIL_CONTACT_NAME'))
                    ->subject($subject);
            });

        $this->storeLog('Email enviado', [
            'from'=> $contact->email,
            'message' => $contact->message
        ]);
    }

    /**
     * Manera en la que escribimos en el log
     *
     * @param $message
     * @param $context
     */
    private function storeLog($message, $context)
    {
        Log::info($message, $context);
    }
}
