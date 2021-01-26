<?php

use Illuminate\Database\Seeder;

class FoodItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker =\Faker\Factory::create();
        for($i=1;$i<=1329;$i++){
        	for($j=$i;$j<$i+2;$j++){
        		DB::table('food_items')->insert([
        			'nav_li'=>$i,
                    'name'=>ucfirst($faker->word),
        		    'detail'=>$faker->sentence($nbWords = 6, $variableNbWords = true) ,
        		    'price'=>$faker->randomNumber($nbDigits = 3, $strict = false),
        		    'ratio'=>'1:2'
        		]);
        	}
        }

    }
}
