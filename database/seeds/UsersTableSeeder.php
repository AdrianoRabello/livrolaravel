<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // User::create([
        //     'name'          => "Adriano Rabello",
        //     'email'         => "adrianor.rabello@hotmail.com",
        //     'password'      => bcrypt("123")
        // ]);

        User::create([
            'name'          => "Adriano Rabello",
            'email'         => "adrianor.rabello2@hotmail.com",
            'password'      => bcrypt("123")
        ]);

    }
}
