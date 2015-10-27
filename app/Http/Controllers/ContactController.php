<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Events\ContactFormHasSent;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Laracasts\Flash\Flash;

class ContactController extends Controller
{

    /**
     * Muestra el formulario de contacto
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('contact.index');
    }

    /**
     * Procesa el formulario de contacto
     *
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendContact(ContactRequest $request)
    {
        $contacto = Contact::create($request->all());

        event(new ContactFormHasSent($contacto));

        Flash::success('Mensaje enviado de manera correcta');

        return redirect()->back();
    }
}
