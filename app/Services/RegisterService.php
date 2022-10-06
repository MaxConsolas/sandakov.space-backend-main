<?php

namespace App\Services;

use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class RegisterService
{
    /**
     * Register user
     *
     * @param  RegisterRequest $data
     * @return User
     */
    public static function register(RegisterRequest $data): User
    {
        $user = new User($data->only(['name', 'surname', 'email']));
        $user->roles_id = Roles::whereSlug(Roles::ROLE_DEFAULT_SLUG)->first()->id;
        $user->password = Hash::make($data->password);
        $user->save();

        return $user;
    }

    /**
     * Confirm email
     *
     * @param  RegisterRequest $data
     * @return
     */
    public static function confirm_email($data)
    {
       
    }

    /**
     * Reset password
     *
     * @param  RegisterRequest $data
     * @return
     */
    public static function reset_password($data)
    {
      
    }

    /**
     * Confirm reset
     *
     * @param  RegisterRequest $data
     * @return
     */
    public static function confirm_reset($data)
    {
       
    }
}
