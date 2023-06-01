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
            'title.required' => 'The title is required',
            'title.max' => 'The title must contain no more than 100 characters',
            'thumb.max' => 'The thumb must contain no more than 200 characters',
            'price.required' => 'The price is required',
            'price.decimal' => 'The price must contain no more than 2 decimal digits',
            'series.max' => 'The series is required',
            'series.max' => 'The series must contain no more than 100 characters',
            'sale_date.date' => 'The sale date is not a valid date',
            'sale_date.before_or_equal' => 'The sale date must be no more than today',
            'sale_date.after' => 'The sale date must be after 1900-01-01',
            'type' => 'The type is required',
            'type.max' => 'The type must contain no more than 100 characters',
        ];
    }
}
