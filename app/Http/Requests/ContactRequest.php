<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends Request
{
    /**
     * De memento cualquiera esta autorizado para enviar un correo de contacto
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    }
}
