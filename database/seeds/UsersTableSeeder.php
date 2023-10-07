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
        	[
                'id'=>'1',
                'name'=>'managerhotel',
                'email' => 'tringuyendonga@gmail.com',
                'password'=>bcrypt('123123'),
                'role_id'=>'2',
        	],
        	[
                'id'=>'2',
                'name'=>'user',
                'email' => 'maixuandu96@gmail.com',
                'password'=>bcrypt('123123'),
                'role_id'=>'2',
        	],
        	[
                'id'=>'3',
                'name'=>'admin',
                'email' => 'admin@gmail.com',
                'password'=>bcrypt('123123'),
                'role_id'=>'4',
        	]
		]);
    }
}
