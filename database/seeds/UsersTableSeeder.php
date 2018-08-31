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
        // Admin
        factory('App\User')->create([
            'name'  => 'Cristian Ionel',
            'email' => 'cristian.ionel@gmail.com',
        ]);

        // Fake users
        factory(App\User::class, 50)->create();
    }
}
