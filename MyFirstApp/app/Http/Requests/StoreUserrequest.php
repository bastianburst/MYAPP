<?php

namespace MyFirstApp\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserrequest extends FormRequest
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
            'nombres' => 'required| max:10',
            'apellidos' => 'required| max:10',
            'mail' => 'required',
            'password' => 'required | max:12 | min: 8' 
            //
        ];
    }
}
