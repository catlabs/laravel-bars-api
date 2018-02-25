<?php

use App\Beer;
use App\Brewery;
use Illuminate\Database\Seeder;

class BeersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $breweries = [
        	[
        		'name'=>'Brussels Beer Project',
        		'beers' => [ 
        			['name' => 'Delta IPA', 'percent' => '6.5' ],
        			['name' => 'Grosse Bertha', 'percent' => '7' ],
        			['name' => 'Dark Sister', 'percent' => '8.4' ]
        		]
        	],
        	[
        		'name'=>'Cantillon',
        		'beers' => [ 
        			['name' => 'Gueuze', 'percent' => '8' ],
        			['name' => 'Cuvée St Gilloise', 'percent' => '7.3' ],
        			['name' => 'Krik', 'percent' => '5.4' ]
        		]
        	],
        	[
        		'name'=>'Brasserie de la Senne',
        		'beers' => [ 
        			['name' => 'Brusseleir', 'percent' => '6.5' ],
        			['name' => 'Jambes-de-Bois', 'percent' => '8.5' ],
        			['name' => 'Zinnebir', 'percent' => '6' ]
        		]
        	],
        ];

        foreach ($breweries as $brewery) {
        	$newBrewery = Brewery::create(['name' => $brewery['name']]);
        	foreach ($brewery['beers'] as $beer) {
        		$newBeer = Beer::create($beer);
        		$newBeer->brewery()->associate($newBrewery);
        		$newBeer->save();
        	}
        }
    }
}
