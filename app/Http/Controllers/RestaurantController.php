<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navigation;
use App\FoodItem;
use Auth;
use App\Restaurant;
use DB;

class RestaurantController extends Controller
{
    //


    public function show($user_id){
  //   dd($user_id);

        $res_des=DB::table('restaurants')->find($user_id);
;    	$menu=Navigation::where('user_id',$user_id)->get();
// foreach($menu as $value){
// //  echo $value;
//   // echo $value->fooditems."<br><br>";
//     foreach ($value->fooditems as $val) {
//       // code...
//       // foreach($val as $v){
//       //   echo $v['id'];
//       // }
//      echo $val."<br>";
//     }
// }
//
// foreach($menu as $value){
//   //  echo $value->fooditems."<br><br>";
//     foreach ($value->fooditems as $val) {
//       // code...
//       echo $val['name']."<br>";
//     }
// }
//dd('');


//$ar='[';
// $ar=array();
//  foreach ($menu as $menu_item) {
//      # code...
//     //$ar.=''.$menu_item->id.',';
//      array_push($ar, $menu_item->id);
//  };
//  //$ar.=']';
//  //dd($ar);
//      $restaurant=FoodItem::whereIn('nav_li',$ar)->orderBy('nav_li','asc')->get();
// // dd($restaurant);
//     $menu= $menu->toArray();
//
//     $restaurant=$restaurant->toArray()
//     ;
//   //  dd($restaurant);
//     $newres;
//   $k=0;
//     for ($i=0; $i <count($menu) ; $i++) {
//     	# code...
//     	for ($j=0; $j <count($restaurant) ; $j++) {
//     		# code...
//     		if($menu[$i]['id']==$restaurant[$j]['nav_li']){
//     			if($k==0){
//     			//	echo '<br>'.$menu[$i]['nav_li'].'<br>';
//     				$k=1;
//     			}
//
//     		}
//     	}
//     	$k=0;
//
//
//    }
//
//
//   // dd($menu);
//     return view('restaurant')->with(['restaurant'=>$restaurant, 'menu'=>$menu,'res'=>$res_des]);

return view('restaurant')->with(['menu'=>$menu, 'res'=>$res_des]);
}

public function showform(Request $request){

     $name= $request->res_name;
     //dd($name);

        $res_des=DB::table('restaurants')->where('name', $name)->first();
       // dd($res_des);
        $user_id=$res_des->user_id;
;       $menu=Navigation::where('user_id',$user_id)->get();
//$ar='[';
$ar=array();
 foreach ($menu as $menu_item) {
     # code...
    //$ar.=''.$menu_item->id.',';
     array_push($ar, $menu_item->id);
 };
 //$ar.=']';
 //dd($ar);
     $restaurant=FoodItem::whereIn('nav_li',$ar)->orderBy('nav_li','asc')->get();
// dd($restaurant);
    $menu= $menu->toArray();
    $restaurant=$restaurant->toArray()
    ;
  //  dd($restaurant);
    $newres;
  $k=0;
    for ($i=0; $i <count($menu) ; $i++) {
      # code...
      for ($j=0; $j <count($restaurant) ; $j++) {
        # code...
        if($menu[$i]['id']==$restaurant[$j]['nav_li']){
          if($k==0){
          //  echo '<br>'.$menu[$i]['nav_li'].'<br>';
            $k=1;
          }

        }
      }
      $k=0;


   }


  // dd($menu);
    return view('restaurant')->with(['restaurant'=>$restaurant, 'menu'=>$menu,'res'=>$res_des]);

}
}
