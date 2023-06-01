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
}
