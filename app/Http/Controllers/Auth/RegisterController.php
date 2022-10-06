<?php

namespace App\Http\Controllers\Auth;

use App\Http\ApiResponse;
use App\Services\RegisterService;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = RegisterService::register($request)->only(['email', 'name', 'surname']);
        return new ApiResponse($user);
    }
}
