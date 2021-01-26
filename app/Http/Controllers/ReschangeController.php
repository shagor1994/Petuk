<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Navigation;
use Auth;

class ReschangeController extends Controller
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
         $id=Auth::user()->id;
      //   dd($request->division);
        $restaurant=new Restaurant;
        $restaurant->name=$request->name;
        $restaurant->city=$request->city;
        $restaurant->division=$request->division;
        $restaurant->district=$request->district;
        $restaurant->address=$request->address;
        $restaurant->user_id=$id;
        $restaurant->save();

       // dd($request->name);

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
          $res=Restaurant::where('user_id',$id)->first();
        //dd($res);
        return view('reschange')->with('res',$res);
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
     // dd($request);

   
    // $input=$request->all();
    //    dd($input);

    // foreach($input as $key => $value) { 
    // if($key!='education') 
    // echo "Key: " . $key . "\n";  
//} 
$this->validate($request,[
        'name' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'division' => 'required|string|max:255',
        'district' => 'required|string|max:255',
        'address' => 'required|string|max:255'
    ]);
        // dd($request->name);
        
        $model=Restaurant::where('user_id',$id)->first();
        $model->name=$request->name;
        $model->city=$request->city;
        $model->district=$request->district;
        $model->division=$request->division;
        $model->address=$request->address;
       
        //dd($model);
        $model->save();
          $menu=Navigation::where('user_id',$id)->get();
       // dd($model);
        return view('/home',['res'=>$model,'menu'=>$menu]);
      
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
    }
}
