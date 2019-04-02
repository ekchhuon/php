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
          'name' => 'Masaki',
          'email' => 'masaki@gmail.com',
          'password'=> bcrypt('123456')
        ]);
    }
}
