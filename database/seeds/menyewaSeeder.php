<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

use App\dashboard;
use Carbon\Carbon;
class menyewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i=0; $i < 100; $i++) { 
        	dashboard::create([
        		'tanggal_masuk' => Carbon::now() 
        					->subDays(rand(1,365)) 
        					->format('Y-m-d'),
		     	'durasi'=> rand(1,3),
		     	'jumlah_orang' => rand(1,6),
		     	'jumlah_kamar'=> rand(1,3),
		     	'id_penyewa' => rand(1,50),
		     	'id_homestay' => rand(1,4),
		     	'biaya' => rand(250000,500000),
		     	'tipe_kamar' => $faker->randomElement(['Single', 'Double', 'Keroyokan'])
        	]);
        }
    }
}
