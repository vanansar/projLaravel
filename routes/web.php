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
//admin

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/admin/dashboard', function (){
	return view('admin/dashboard');
});
//view Users
Route::get('/admin/userDetails', 'LoginController@user_Details');


Route::get('/deleteUser/{data}', 'ActionController@deleteUser');
Route::get('/', function (){
	return view('client/index');
});
//client
Route::get('/client', function (){
	return view('client/index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login_action', 'LoginController@login_act');
Route::post('user_login', 'LoginController@user_lo');

Route::post('/reg', 'RegisterController@reg');

Route::get('/clientlogin', function ()
    {
        return view('client/clientlogin');
    });
Route::get('/clientlogin', function ()
    {
        return view('client/clientlogin');
    });

    //country
Route::get('/clientregister', function ()
    {
        $data['sel_country']=DB::table('countries')->get();

        return view('client/clientregister',$data);
    });


Route::get('/userPage/{data}', 'ActionController@editUser');


Route::post('/page/do-ajax','RegisterController@select_country');

Route::get('/userlogout', '\App\Http\Controllers\Auth\Login1Controller@logiout');
Route::get('/logout', '\App\Http\Controllers\Auth\Login1Controller@logiout');



