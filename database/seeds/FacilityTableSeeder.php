<?php

use Illuminate\Database\Seeder;

class FacilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fac')->insert([
        	[
            'id'=>'2',
			'name' => 'Wifi',
        	],
        	[
            'id'=>'3',
			'name' => 'Bể Bơi',
        	],
        	[
            'id'=>'4',
			'name' => 'Bữa Sáng Miễn Phí',
        	],
        	[
            'id'=>'5',
			'name' => 'Phòng Tập Gym',
        	],
        	[
            'id'=>'6',
			'name' => 'Giặt Sấy',
        	]
		]);
    }
}
