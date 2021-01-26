<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navigation;
use Auth;
use App\Restaurant;

class ResmenuController extends Controller
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
       $id=Auth::user()->id;
      // dd($request->menu[0]);
       // $nav=new Navigation;

       //  for ($i=0; $i <count($request->menu) ; $i++) { 
       //      $nav->nav_li=$request->menu[$i];
       //      $nav->user_id=$id;
       //      $nav->save();

       //  }
       $data=array();
               for ($i=0; $i <count($request->menu) ; $i++) { 
            # code...
        
        array_push($data, array('user_id'=>$id, 'nav_li'=>$request->menu[$i]));
    }
       //dd($data);
Navigation::insert($data);
$model=Restaurant::where('user_id',$id)->first();
$menu=Navigation::where('user_id',$id)->get();
       // dd($model);
        return view('/home',['res'=>$model,'menu'=>$menu]);
       // return view('home');

      //  dd($request->menu);
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
        $menu=Navigation::where('user_id',$id)->get();

         return view('resmenu')->with('menu',$menu);

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
        //
       // dd($request->name);
         $nav=Navigation::find($id);
       //  dd($request->name);
         $nav->nav_li=$request->name;

        // dd($nav->nav_li);
         $nav->save();
          $user_id=Auth::user()->id;
  $menu=Navigation::where('user_id',$user_id)->get();
         return view('resmenu')->with('menu',$menu);


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
        $nav=Navigation::find($id);
        $nav->delete();
        $user_id=Auth::user()->id;
  $menu=Navigation::where('user_id',$user_id)->get();
         return view('resmenu')->with('menu',$menu);


    }
}
