<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required|min:10',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required',
        ];
    }

        /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Il campo del titolo non può essere vuoto',
            'description.required' => 'Il campo della descrizione non può essere vuoto e deve contenere almeno 10 caratteri',
            'thumb.required' => 'Il campo di inserimento del link immagine non può essere vuoto',
            'price.required' => 'Il campo del prezzo non può essere vuoto',
            'series.required' => 'Il campo della serie non può essere vuoto',
            'sale_date.required' => 'Il campo della data non può essere vuoto',
            'type.required' => 'Il campo del titolo non può essere vuoto',
        ];
    }
}
