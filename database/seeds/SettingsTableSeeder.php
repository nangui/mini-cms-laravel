<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Blog\Setting::create([
            'site_name' => 'Laravel\'s Blog',
            'address' => 'Dakar, Médina rue 41 x 28',
            'contact_number' => '00221776816079',
            'contact_email' => 'adonainangui03@gmail.com'
        ]);
    }
}
