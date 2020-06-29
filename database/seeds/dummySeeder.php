<?php

use Illuminate\Database\Seeder;

use App\dashboard;
use Carbon\Carbon;

class dummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) { 
        	dashboard::create([
        		'pendapatan' => rand(250000,500000),
        		'pengunjung' => rand(1,4),
        		'kamar' => rand(1,3),
        		'created_at' => Carbon::now() 
        					->subDays(rand(1,365)) 
        					->format('Y-m-d')
        	]);
        }
    }
}
