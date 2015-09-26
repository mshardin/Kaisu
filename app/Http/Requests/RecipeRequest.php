<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RecipeRequest extends Request
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
            'title'                 => 'required',
            'image'                 => 'required', 
            'summary'               => 'required|max:70', 
            'quantity'              => 'required',
            'ingredients'           => 'required',
            'directions'            => 'required',
            'course'                => 'required',
            'type'                  => 'required'
        ];
    }
}
