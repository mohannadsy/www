<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array(
                'email' => 'admin@admin.com',
                'name' => 'admin',
                'is_admin' => '1',
                'password' => Hash::make('12345678'))
        );
        DB::table('users')->insert(
            array(
                'email' => 'mohannad@gmail.com',
                'name' => 'Mohannad',
                'password' => Hash::make('12345678'))
        );
        DB::table('users')->insert(
            array(
                'email' => 'sara@gmail.com',
                'name' => 'Sara',
                'password' => Hash::make('12345678'))
        );
        DB::table('users')->insert(
            array(
                'email' => 'raghad@gmail.com',
                'name' => 'Raghad',
                'password' => Hash::make('12345678'))
        );
        DB::table('users')->insert(
            array(
                'email' => 'clauda@gmail.com',
                'name' => 'Clauda',
                'password' => Hash::make('12345678'))
        );
        DB::table('users')->insert(
            array(
                'email' => 'noor@gmail.com',
                'name' => 'Noor',
                'password' => Hash::make('12345678'))
        );
    }
}
