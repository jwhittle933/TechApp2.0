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
            'name' => 'admin',
            'administrator' => 'True',
            'email' => 'classroomtechnology@sbts.edu',
            'password' => bcrypt('master')
        ]);
    }
}
