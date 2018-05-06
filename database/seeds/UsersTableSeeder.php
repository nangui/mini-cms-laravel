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
        $user = App\User::create([
            'name' => 'Adonai Nangui',
            'email' => 'adonainangui03@gmail.com',
            'password' => bcrypt('Navarooceane@123'),
            'admin'=> 1 
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/adonai.png',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ea dicta excepturi unde qui ut provident modi blanditiis culpa quisquam est numquam facilis voluptatibus quis, quia, nemo tempore beatae tenetur.',
            'github' => 'github.com',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
