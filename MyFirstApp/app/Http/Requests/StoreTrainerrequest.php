<?php

namespace MyFirstApp\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainerrequest extends FormRequest
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
            //
            'nombre' => 'required| max:10',
            'apellido' => 'required| max:10',
            'avatar' => 'required| image',
            'mail' => 'required',
            'pass' => 'required | max:12 | min: 8' 
        ];
    }
}
