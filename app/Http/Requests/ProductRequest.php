<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:2',
            'description' => 'required',
            'price' => 'required|numeric',
            'img' => 'nullable|image',
        ];
    }
    public function messages(): array
{
    return [
        'name.required' => 'Il nome è obbligatorio.',
        'name.min' => 'Il nome deve avere almeno 2 caratteri.',
        'description.required' => 'La descrizione è obbligatoria.',
        'price.required' => 'Il prezzo è obbligatorio.',
        'img.image' => "Il file caricato deve essere un'immagine.",
    ];
}
}
