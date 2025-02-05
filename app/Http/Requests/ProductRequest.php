<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
   
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
            'name'=>"required|min:4",
            'description'=>"required|min:10|max:200",
            'price'=>"required|numeric|min:1",
            'image'=>"nullable|image",
            'brand'=>"required|min:4",
            'color'=>"nullable|min:3",
            'year'=>"required|digits:4|numeric|min:1980|max:2025",
            'weight'=>"nullable|numeric|min:1"
        ];
    }
    public function messages()
    {
        return 
        [
            //controllo NAME
            "name.required"=>"Attenzione! Nome prodotto non inserito!",
            "name.min"=>"Attenzione! Il nome del prodotto non può avere meno di 4 caratteri!",
            //controllo CATEGORY
            "category.required"=>"Attenzione! Categoria non inserita!",
            "category.min"=>"Attenzione! Il nome della categoria non può avere meno di 4 caratteri!",
            // controllo DESCRIZIONE
            "description.required"=>"Attenzione! Descrizione non inserita!",
            "description.min"=>"Attenzione! Descrizione troppo corta!",
            "description.max"=>"Attenzione! Descrizione troppo lunga!",
            //controllo PREZZO
            "price.required"=>"Attenzione! Prezzo non inserito!",
            "price.numeric"=>"Attenzione! Inserire il prezzo nel formato corretto!",
            "price.min"=>"Attenzione! Il prezzo non può essere inferiore ad 1€!",
            //controllo IMMAGINE 
            "image.image"=>"Attenzione! Sono supportati solo file di tipo: jpg, jpeg, png, bmp, gif, svg, webp",
            //controllo BRAND
            "brand.required"=>"Attenzione! Nome della marca non inserito!",
            "brand.min"=>"Attenzione! Il nome della marca non può avere meno di 4 caratteri!",
            //controllo COLORE
            "color.min"=>"Attenzione! Il nome del colore non può avere meno di 3 caratteri!",
            //controllo ANNO
            "year.required"=>"Attenzione! Anno non inserito",
            "year.digits"=>"Attenzione! Inserire l'anno nel formato corretto! AAAA",
            "year.numeric"=>"Attenzione! Inserire l'anno nel formato corretto! AAAA",
            "year.min"=>"Attenzione! L'anno non può essere precedente al 1980!",
            "year.max"=>"Attenzione! L'anno non può essere successivo al 2025!",
            //controllo PESO
            "weight.numeric"=>"Attenzione! Inserire un valore valido per il peso!",
            "weight.min"=>"Attenzione! Inserire un valore valido per il peso!"
        ];
    }
}
