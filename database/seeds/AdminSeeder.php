<?php

use Illuminate\Database\Seeder;
use App\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        //
        User::create([
        	'name'	=> 'Super Admin',
        	'email'	=> 'admin@myanmarlinks.net',
        	'education'	=> '',
        	'password'	=> bcrypt('123456'),
        	'is_admin'	=> true
        	]);


    }
}
