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
        App\User::create([
            'name' => 'Adonai Nangui',
            'email' => 'adonainangui03@gmail.com',
            'password' => bcrypt('Navarooceane@123')
        ]);
    }
}
