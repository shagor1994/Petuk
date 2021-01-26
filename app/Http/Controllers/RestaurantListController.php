<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RestaurantListController extends Controller
{
//

public function search(Request $request){


  
    $query=$request->get('query');
      //dd($query);
	$restaurants = DB::table('restaurants')->where('name', 'LIKE', '%'.$query.'%')->distinct()->take(10)->get();
  $collection = collect($restaurants);

$restaurants = $collection->unique('name')->values()->all(); 
//	dd($restaurants);

  $output = '';  

  $output = '<ul class="list-unstyled">';  


  if($restaurants!='')  
  {  
      
  	foreach ($restaurants as $restaurant) {
  
   	  $output.='<li><a href="restaurant/'.$restaurant->user_id.'" id="'.$restaurant->id.'">'.$restaurant->name.'</a></li>';
   
   }
  }  
  else  
  {  
       $output .= '<li>Country Not Found</li>';  
  }  
  $output .= '</ul>';  
  echo  $output;  
}  

}

