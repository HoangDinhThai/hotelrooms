<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	[
            'id'=>'1',
			'RoleName' => 'Manager Hotel',
        	],
        	[
            'id'=>'2',
			'RoleName' => 'User',
        	],
        	[
            'id'=>'4',
			'RoleName' => 'Admin',
        	]
		]);
    }
}
