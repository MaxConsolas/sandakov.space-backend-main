<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class DefaultFormRequest extends FormRequest
{
    protected function failedValidation(Validator $validator) {

        $response = response()->json([
            'success' => false,
            'message' => 'Ошибка валидации',
            'errors' => $validator->errors()
        ]);            

        throw (new ValidationException($validator, $response))
            ->errorBag($this->errorBag);
    }
}
