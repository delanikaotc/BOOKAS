<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role_id' => '1'
        ]);
        DB::table('user')->insert([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'role_id' => '2',
            'phone' => '082111111111',
            'address' => 'jalan pisang'
        ]);
    }
}