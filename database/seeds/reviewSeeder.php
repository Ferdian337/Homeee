<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

use App\review;
use Carbon\Carbon;

class reviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
        	review::create([
		     	'deskripsi'=> $faker->text,
		     	'bintang' => rand(1,3), 
     			'id_homestay' => rand(1,4),
        	]);
        }
    }
}
