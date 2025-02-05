<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'companyName' => 'required|min:2|',
            'iva' => 'required|numeric|digits:11',
            'buisnessAddress' => 'required|min:5',
            'buisnessCity' => 'required|min:2',
            'companyWebSite' => 'required|string|starts_with:www.,https://',
            'contactEmail' => 'required|email',
            'contactNumber' => 'required|numeric|digits:10',
        ];
    }
    public function messages()
    {
        return
            [
                'companyName.required' => 'Attenzione! Nome compagnia non inserito.',
                'companyName.min' => 'Attenzione! Il nome della compagnia deve avere almeno 2 caratteri.',

                'iva.required' => 'Attenzione! Numero PARTITA IVA non inserito.',
                'iva.numeric' => 'Attenzione! Il numero PARTITA IVA non è nel formato corretto.',
                'iva.digits' => 'Attenzione! Il Numero PARTITA IVA deve essere di 11 cifre.',

                'busnessAddress.required' => 'Attenzione! Indirizzo della sede legale non inserito.',
                'busnessAddress.min' => 'Attenzione! L`indirizzo della sede legale della compagnia deve avere almeno 5 caratteri.',

                'buisnessCity.required' => 'Attenzione! Città della sede legale non inserito.',
                'buisnessCity.min' => 'Attenzione! Il nome della città della sede legale della compagnia deve avere almeno 2 caratteri.',

                'companyWebSite.required' => 'Attenzione! Sito web non inserito.',
                'companyWebSite.string' => 'Attenzione! Sito web non inserito nel formato corretto. (www.[...] o https://[...])',
                'companyWebSite.starts_with' => 'Attenzione! Sito web non inserito nel formato corretto. (www.[...] o https://[...])',

                'contactEmail.required' => 'Attenzione! Email della compagnia non inserita.',
                'contactEmail.email' => 'Attenzione! Formato della email della compagnia non valido.',

                'contactNumber.required' => 'Attenzione! Contatto telefonico della compagnia non inserito.',
                'contactNumber.numeric' => 'Attenzione! Contatto telefonio della compagnia non inserito nel formato corretto.',
                'contactNumber.digits' => 'Attenzione! Contatto telefonico della compagnia non inserito nel formato corretto.',
            ];
    }
}
