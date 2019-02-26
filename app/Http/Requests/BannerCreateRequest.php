<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerCreateRequest extends FormRequest
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
            'client_name' => 'required|string|max:100',
            'client_email' => 'required|email|max:100',
            'client_phone' => 'required|string|max:20',
            'banner_name' => 'required|string|max:100',
            'banner_image' => 'required',
            'banner_imgage_width' => 'required|numeric',
            'banner_image_heigth' => 'required|numeric',
            'banner_begin' => 'date|required',
            'banner_end' => 'date|required',
            'banner_price_model' => 'required|between:1,2',
            'banner_price' => 'required|string',
            'banner_image' => 'required|mimes:jpg,jpeg,png'
        ];
    }
}
