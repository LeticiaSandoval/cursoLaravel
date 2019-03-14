<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sol Perez',
            'email' => 'sol@mail.com',
            'password' => bcrypt('sol'),
            'type' => 'admin'
        ]);
    }
}
