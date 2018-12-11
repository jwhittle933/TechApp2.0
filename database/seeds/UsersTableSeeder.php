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
            'password' => bcrypt('Jack&Kate4ever')
        ]);
        DB::table('users')->insert([
            'name' => 'josborn',
            'administrator' => 'True',
            'email' => 'josborn@sbts.edu',
            'password' => bcrypt('jred')
        ]);
    }
}
