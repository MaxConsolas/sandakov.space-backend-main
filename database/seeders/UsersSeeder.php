<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Максим',
                'surname' => 'Сандаков',
                'email' => 'sandakov2013@yandex.ru',
                'password' => '$2y$10$y.lbrOl0J8FemO/QXRTYLufzh5a0cDPwhQXGlMFenqQlToRTedFk.',
                'roles_id' => DB::table('roles')->whereSlug(Roles::ROLE_SUPERADMIN_SLUG)->first()->id,
                'created_at' => now()
            ]
        ]
    );
    }
}
