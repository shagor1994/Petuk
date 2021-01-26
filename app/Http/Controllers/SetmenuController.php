<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fooditem;
use Auth;
use App\Navigation;

class SetmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user_id=Auth::user()->id;
        $menu=Navigation::where('user_id',$user_id)->get();


    
        $setmenu=Fooditem::where('nav_li',$id)->get();
     //  dd($setmenu);
       
         return view('setmenu')->with(['setmenu'=>$setmenu, 'menu'=>$menu]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //dd($id);
        if(Auth::check()){
                    $setmenu=Fooditem::where('id',$id)->first();

        return view('changesetmenu')->with(['setmenu'=>$setmenu, 'id'=>$id]);
    }
        else{
         return view('home');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
      
          
         

  
        $setmenu=Fooditem::where('id',$id)->first();
        $setmenu->name=$request->name;
        $setmenu->detail=$request->detail;
        $setmenu->price=$request->price;
       
        if($request->customRadio=='any'){
                $setmenu->discount=$request->discount;

        }else if($request->customRadio==1){

               $setmenu->discount=1;
        }else{
                 $setmenu->discount=0;
        }
        
     $file= $request->file('file');
            $filename= $file->getClientOriginalName();
            $filesize= $file->getSize();
            $path= $file->path(); 
             $array=array(explode(".", $filename));
             $onlyname=$array[0][0];
             $ext=$array[0][1];

             $allowed_ext = array("png", "jpg", "jpeg");
             $allowed_ext1=array("PNG", "JPG", "JPEG");
             list($width, $height) = getimagesize($path);
             if(in_array($ext, $allowed_ext)||in_array($ext, $allowed_ext1)){

                $new_name=$onlyname.$ext;
                $uppath= "public/cover_image/".$new_name;
                //return $new_name;
                if($ext=='png'||$ext=='PNG'){
                    $new_image=imagecreatefrompng($path);

                }
                else{
                    $new_image=imagecreatefromjpeg($path);

                }

             
               $new_height=200;
                $new_width= ($height/$width)*1000;
                $tmp_image = imagecreatetruecolor($new_width, $new_height);
                imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
 
            imagejpeg($tmp_image, 'C:\xampp\htdocs\larevoy\storage\app\public\chii.jpeg');
            
                 imagedestroy($new_image);
                imagedestroy($tmp_image);


       


    }
  $setmenu->image='cheii.jpeg';
        $setmenu->save();
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $setmenu=Fooditem::find($id);
        $setmenu->delete();
          $user_id=Auth::user()->id;
        $menu=Navigation::where('user_id',$user_id)->get();


    
        $setmenu=Fooditem::where('nav_li',$user_id)->get();
     //  dd($setmenu);
       
         return view('setmenu')->with(['setmenu'=>$setmenu, 'menu'=>$menu]);

    }
}
