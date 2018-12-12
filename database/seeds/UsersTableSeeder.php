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
        DB::table('users')->insert([
            'name' => 'jwhittle',
            'administrator' => 'True',
            'email' => 'jwhittle@sbts.edu',
            'password' => bcrypt('jwhittle')
        ]);
        DB::table('users')->insert([
            'name' => 'josborn',
            'administrator' => 'True',
            'email' => 'josborn@sbts.edu',
            'password' => bcrypt('jred')
        ]);
    }
}
