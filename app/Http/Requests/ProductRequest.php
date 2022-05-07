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
            'code' => 'required|alpha_dash|min:5|max:5,unique:products,code',
            'description' => 'nullable|string|max:1000',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'brand_id' => 'required|exists:brands,id',
            'subcategory_id' => 'required|exists:subcategories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'size' => 'nullable|string|in:S,M,L,XL',
            'secondary_images'=>'required|array|min:1|max:5',
            'secondary_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ];

    }
}
