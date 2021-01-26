<?php

use Illuminate\Database\Seeder;

class RestaurantNameTableSeeder extends Seeder
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

     for($i=1;$i<142;$i++){
     	  DB::table('restaurants')->insert([
     	  	'id'=>$i,
     	  	'name'=>$faker->randomElement($array = array ('Lonesome Dove ','Bobby’s ','Melting Pot ','Daytime Place ','Easy Eats ','Macro Bites ','Grubber Hub ','Cheerful Rhino ','Home Cooking Experience ','Fare & Feed ','Golden Palace ','Soups & Snacks ','Quick Bite ','Fast & Friendly ','Big Bites ','Blind Pig ','Eatable ','Eatery ','Goodies ','Lard Boy ','Many Foods ','Me Likey ','Wonton Express ','Great Burger ','Awesome Burger ','Amazing Sauce ','Asian Express ','Fearless Wander ','Crate Express ','Smothered In Love ','Sweet Delectable ','Appetizing As Heck ','Appetizing Bird ','Scrumptious Temptations ','Smile N’ Delight ','Choice Foods ','Dainty Dog ','Hungry Dog ','Heavenly Creations ','Food For Thought ','Food In My Tummy ','Tum Tum Express ','Lil Johnny’s ','Bill’s Burgers ','A Night In Paris ','Distinctive Creations ','Spicy Heat ','Spicy Jack’s ','Pepper Jack’s ','Rich Meat ','Fit For A King ','King of Meat ','Delicious Donuts ','Rare Meats ','Rare Cuts ','Rare Choice ','Sapid Salads ','Soup & Salad Express ','Seasoned ','Smitten ','Love Street ','Ice Cream Sandwiches ','For The Love Of Ice Cream ','Infatuated Creations ','Smack Dab ','Frozen Yogurt ','Sherbet ','Mickey’s Foodstuff ','Pick & Go ','The Satiated Drink ','Pearl ','Bless This Mess Hall ','Grits & Gravy ','Cheerful Hippo ','Mealtime ','Summer’s End ','Winter Comes ','Nightcap ','It’s Good Food ','Leggo My Wagyu ','Tokyo Beat ','New York Pulse')),
     	  	'city'=>$faker->randomElement($array = array("Barguna","Barisal","Bhola","Jhalokati","Patuakhali","Pirojpur","Bandarban","Brahmanbaria","Chandpur","Chittagong","Comilla","Coxs Bazar","Feni","Khagrachhari","Lakshmipur","Noakhali","Rangamati","Dhaka","Faridpur","Gazipur","Gopalganj","Kishoreganj","Madaripur","Manikganj","Munshiganj","Narayanganj","Narsingdi","Rajbari","Shariatpur","Tangail","Bagerhat","Chuadanga","Jessore","Jhenai","Khulna","Kushtia","Magura","Meherpur","Narail","Satkhira","Jamalpur","Mymensingh","Netrokona","Sherpur","Bogra","Joypurhat","Naogaon","Natore","Chapai Nawabganj","Pabna","Rajshahi","Sirajganj","Dinajpur","Gaibandha","Kurigram","Lalmonirhat","Nilphamari","Panchagarh","Rangpur","Thakurgaon","Habiganj","Moulvibazar","Sunamganj","Sylhet")), 
  
     	  	'district'=>$faker->randomElement($array = array("Barguna","Barisal","Bhola","Jhalokati","Patuakhali","Pirojpur","Bandarban","Brahmanbaria","Chandpur","Chittagong","Comilla","Coxs Bazar","Feni","Khagrachhari","Lakshmipur","Noakhali","Rangamati","Dhaka","Faridpur","Gazipur","Gopalganj","Kishoreganj","Madaripur","Manikganj","Munshiganj","Narayanganj","Narsingdi","Rajbari","Shariatpur","Tangail","Bagerhat","Chuadanga","Jessore","Jhenai","Khulna","Kushtia","Magura","Meherpur","Narail","Satkhira","Jamalpur","Mymensingh","Netrokona","Sherpur","Bogra","Joypurhat","Naogaon","Natore","Chapai Nawabganj","Pabna","Rajshahi","Sirajganj","Dinajpur","Gaibandha","Kurigram","Lalmonirhat","Nilphamari","Panchagarh","Rangpur","Thakurgaon","Habiganj","Moulvibazar","Sunamganj","Sylhet")),  
           
     	  	'division'=>$faker->randomElement($array=array("Dhaka","Rangpur","Rajshahi","Khulna","Sylhet","Barisal","Chattagong")),
     	  	'address'=>$faker->address,
     	  	'user_id'=>$i,
     	  	'image'=>$faker->numberBetween($min = 1, $max = 20),
            'rating'=>$faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 5),
     	  	'discount'=>$faker->numberBetween($min = 5, $max = 50),

           	    
            ]);

     }
    }

}
