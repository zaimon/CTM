<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('user')->delete();

	    DB::table('user')->insert([
	        'uName'     => 'zaimon',
	        'password'  => Hash::make('12345'),
	        'fName'     => 'Preecha',
	        'lName'     => 'Saelee',
	        'gender' => '1',
	        'rank'    => '9',
	        'email'    => 'preecha.innova@gmail.com',
	        'created_at' => '17-05-08',
	    ]);
    }
}
