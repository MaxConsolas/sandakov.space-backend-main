<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'title' => 'Пользователь',
                'order' => DB::table('roles')->max('order') + 1,
                'slug' => 'user',
                'created_at' => now()
            ],
            [
                'title' => 'Модератор',
                'order' => DB::table('roles')->max('order') + 1,
                'slug' => 'moderator',
                'created_at' => now()
            ],
            [
                'title' => 'Администратор',
                'order' => DB::table('roles')->max('order') + 1,
                'slug' => 'admin',
                'created_at' => now()
            ],
            [
                'title' => 'Супер администратор',
                'order' => DB::table('roles')->max('order') + 1,
                'slug' => 'superadmin',
                'created_at' => now()
            ],
        ]
    );
    }
}
