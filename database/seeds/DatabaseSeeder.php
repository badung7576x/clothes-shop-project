<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => "Super Admin",
            'email' => "admin@gmail.com",
            'phone_number' => "0869236295",
            'password' => Hash::make('admin123')
        ]);

        DB::table('users')->insert([
            'name' => "Test User",
            'email' => "user01@gmail.com",
            'phone_number' => "0123456789",
            'password' => Hash::make('user01')
        ]);
    }
}
