<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'email' => 'admin123@mail.com',
                'password' => Hash::make('Password1234')
            ],
            [
                'username' => 'andre',
                'email' => 'andre24@mail.com',
                'password' => Hash::make('Password4321')
            ]
        ]);
    }
}