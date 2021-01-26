<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'CitiesController@show');

Route::get('login',' App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::get('start', 'CitiesController@show')->name('start');
Route::get('cities/{division}', 'CitiesController@city');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('restaurant/{id}', 'RestaurantController@show');
Route::post('f_restaurant','RestaurantController@showform')->name('f_restaurant');
// Route::get('menuchange/{user_id}','MenuchangeController@show')->name('menuchange');
Route::resource('reschange', 'ReschangeController')->middleware('restaurant');
Route::resource('resmenu', 'ResmenuController');
Route::resource('setmenu','SetmenuController');

/////////////////////////////////////////////////
Route::get('/albums','AlbumsController@index');
Route::get('/albums/create','AlbumsController@create');
Route::post('/albums/store','AlbumsController@store');

////////////projcet routes.....
Route::get('home', function(){
	return view('phome');
});
Route::get('food',function(){
	return view('food');
});
Route::get('fg',function(){
	return view('fg');
});
Route::post('RestaurantListController','RestaurantListController@search')->name('restaurantList');
Route::post("");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

///mail verifications routes...
Route::get('mail','MailController@send')->name('mail')->middleware('auth');

Route::get('see',function(){
	return view('email/emailLayout');
});
Route::get('verify/{code}','MailController@verify');
/*....Password Reset .....

*/
Route::get('show','PasswordResetController@show')->name('showR');
Route::post('send','PasswordResetController@sendMail')->name('sendR');
Route::get('check/{code}','PasswordResetController@check');

Route::post('update','PasswordResetController@update')->name('update');
