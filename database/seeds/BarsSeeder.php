<?php

use App\Bar;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');
        for ($i=0; $i < 100; $i++) { 
        	$bar = Bar::create([
                'name' => $faker->company,
                'street' => $faker->streetAddress,
				'city' => $faker->city,
                'zip' => $faker->postcode,
            ]);
        }
    }
}
