<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:5|max:50",
            "description" => "required|min:5|max:65535",
            "thumb" => "required|max:65535",
            "price" => "required|max:20",
            "series" => "required|max:20",
            "sale_date" => "required|max:255",
            "type" => "required|min:5|max:255",
            "artists" => "max:20",
            "writers" => "max:20",
        ];
    }
    public function messages()
    {
        return [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" => "Il titolo deve essere almeno di :min caratteri",
            "description.required" => "Inserisci una descrizione",
            "price.required" => "Inserisci un prezzo",
            "type.required" => "Inserisci la tipologia"
        ];
    }
}
