<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowController extends Controller
{
    //
        public function show(Request $request){
        	

        	$dr=$request->DynamicParameters['key2'];
        	//dd($dr);
        	$data = explode(',', $dr);
        	$image= base64_decode($data[1]);
        	$image_name='fileeee.png';
           // $path = public_path().'\storage\app\public\chi.jpeg';
            //dd($path);
            // storing image in storage/app/public Folder 
       $tem=\Storage::disk('public')->put($image_name,$image);
       dd($tem);
         // file_put_contents($path, $image);
       //	dd($dr);
        }
}
