<?php
/**
 * Created by AdrianFullStack
 * Date: 07/06/2019
 * Time: 11:15 AM
 */

namespace App\Http\Api\Requests\Commercial;

use App\Http\Api\Requests\FormRequest;

class ClientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'example' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'example.required' => 'El atributo :attribute es requerido',
        ];
    }

    public function attributes()
    {
        return [
            'example' => 'ejemplo',
        ];
    }
}