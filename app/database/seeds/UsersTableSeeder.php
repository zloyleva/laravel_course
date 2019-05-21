<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'zloyleva',
            'first_name' => 'Oleh',
            'last_name' => 'Lev',
            'role' => 'admin',
            'gender' => 'male',
            'email' => 'admin@test.com',
            'password' => bcrypt('admin@test.com'),
        ]);
    }
}
