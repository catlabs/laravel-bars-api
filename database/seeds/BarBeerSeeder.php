<?php

use App\Bar;
use App\Beer;
use Illuminate\Database\Seeder;

class BarBeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Bar::all() as $bar) {
        	foreach (Beer::all()->random(3) as $beer) {
        		$beer->bars()->attach($bar->id);
        	}
        }
    }
}
