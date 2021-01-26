<?php

use Illuminate\Database\Seeder;

class NavigationTableSeeder extends Seeder
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

        for ($i=0; $i <142 ; $i++) { 
        
            for ($j=0; $j <8 ; $j++) { 
            	
            DB::table('navigations')->insert(['user_id'=>$i+123,
             'nav_li'=>ucfirst($faker->unique()->word)]);


            }

        }

    }
}
