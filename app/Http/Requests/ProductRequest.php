<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
            'ingredient' => 'required|string|max:255',
            'subingredient' => 'required|string',
            'description' => 'required|string',
            'image1' => 'required|file|image|max:5000',
            'image2' => 'file|image|max:5000|nullable',
            'image3' => 'file|image|max:5000|nullable',
        ];
    }
}
