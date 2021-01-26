<?php

use Illuminate\Database\Seeder;



class DeliveryAreaTableDataSeeder extends Seeder
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
       for ($i = 0; $i < 50; $i++) {
           DB::table('delivery_area')->insert([
                'user_id' => $faker->numberBetween(1,100),
                'res_name' =>$faker->word,
                'area'=>$faker->name,
               

            ]);
        }
    }
}
