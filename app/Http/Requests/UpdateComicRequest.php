<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' =>  'nullable|max:200', //image?
            'price' =>  'required|decimal:0,2',
            'series' =>  'required|max:100',
            'sale_date' =>  'nullable|date',
            'type' =>  'required|max:100',
            'artists' => 'nullable',
            'writers' => 'nullable',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è richiesto',
            'title.max' => 'Il titolo non deve avere più di 100 caratteri',
            'thumb.max' => 'Il Thumb non deve avere più di 100 caratteri',
            'price.required' => 'Il prezzo è richiesto',
            'price.decimal' => 'Il prezzo non puà contenere più di 2 decimali',
            'series.max' => 'La serie è richiesta',
            'series.max' => 'La sewrie non puà contenere più di 100 caratteriu',
            'sale_date.date' => 'La data di vendita non è una data valida',
            'sale_date.before_or_equal' => 'La data di vendita non può essere successiva a oggi',
            'sale_date.after' => 'La data di vendita non puà essere inferiore a 1900-01-01',
            'type' => 'Il tipo è richiesto',
            'type.max' => 'Il tipo non può contenere più di 100 caratteri',
        ];
    }
}
