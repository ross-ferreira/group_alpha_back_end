<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            "title" => ["required", "string"],
            "url" => ["required", "string"],
            "top" => ["required", "integer"],
            "right" => ["required", "integer"],
            "bottom" => ["required", "integer"],
            "left" => ["required", "integer"],
    ]; }
}
