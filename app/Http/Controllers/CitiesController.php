<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Restaurant;

class CitiesController extends Controller
{
    //
    public function show(){
    	$cities= City::all();
      //  dd($cities);
    	
    	return view('/start')->with('cities',$cities);
    

    }
    public function city($division){
    	

    	$dis_cities=Restaurant::where('division',$division)->orderBy('rating', 'desc')
               ->take(12)
               ->get();
        $offer_cities=Restaurant::where('division',$division)->orderBy('discount', 'desc')->get();    
    	//dd($cities);

    	return view('division',['restaurants'=>$dis_cities,'city'=>$division,'offer_cities'=>$offer_cities]);
    }
}
