<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\contact;
Use faker\Factory as faker;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		/*
        $data=new contact;
        $data->name='rohit';
		$data->email='rohit@gmail.com_addref';
		$data->mobile='8789789498749';
		$data->message='hi demo';
		$data->save();
		*/
		
		$faker= Faker::create();
		for($i=1;$i<=100;$i++)
		{
			$data=new contact;
			$data->name=$faker->name;
			$data->email=$faker->email;
			$data->mobile="8979798798";
			$data->message="Hi demo ";
			$data->save();
		}

		
		
    }
}
