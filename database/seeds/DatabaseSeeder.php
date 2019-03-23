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
        // $this->call(UsersTableSeeder::class);
        DB::table('topics')->insert([
            'username' => Str::random(10), 
            'content' =>  Str::random(100),
	        'created_at' => date('Y-m-d'),
	        'updated_at'=> date('Y-m-d')
        ]);
    }
}
