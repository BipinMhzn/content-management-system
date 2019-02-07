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
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234567890'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => 1,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Veniam quis cillum aliquip laboris officia cupidatat tempor consectetur aliqua ad. Commodo excepteur nisi quis minim aute cillum elit tempor aliqua labore laboris do. Incididunt magna consequat sunt non nisi duis. Et ullamco pariatur ea aliquip velit.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
