<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($x=0; $x<=5; $x++) {
	        DB::table('topics')->insert([
	            'username' => $x.Str::random(10), 
	            'content' =>  "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
		        'created_at' => date('Y-m-d'),
		        'updated_at'=> date('Y-m-d')
	        ]);
    	}
    }
}
