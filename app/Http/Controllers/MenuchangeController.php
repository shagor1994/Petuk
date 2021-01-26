<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class MenuchangeController extends Controller
{
    //

    public function show($user_id){
    	$res=Restaurant::where('user_id',$user_id)->first();
    	//dd($res);
    	return view('menuchange')->with('res',$res);
    	//return view('change')->with('uer_id',)
    }
}
