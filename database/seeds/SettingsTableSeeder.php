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
        \App\Setting::create([
            'site_name' => "St. Xavier's College",
            'address' => 'Maitighar, Kathmandu',
            'contact_number' => '1234567890',
            'contact_email' => 'sxc@edu.com'
        ]);
    }
}
