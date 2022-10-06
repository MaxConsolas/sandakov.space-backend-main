<?php

namespace App\Http\Requests;

class RegisterRequest extends DefaultFormRequest
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
            'name' => ['string', 'required', 'max:30'],
            'surname' => ['string', 'required', 'max:30'],
            'email' => ['email:rfc,dns', 'required', 'max:30', 'unique:users,email'],
            'password' => ['string', 'required', 'max:50', 'confirmed'],
        ];
    }
}
