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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//Homepage
Route::get('/home', 'HomeController@index')->name('home');


//About
Route::get('/about', function () {

	$tasks = [
'Tutorial 1',
'Tutorial 2',
'Tutorial 3'
	];

    return view('about', compact('tasks'));
});



//Vehicles

Route::get('vehicles', function (){

$vehicles = DB::table('vehicles')->get();
// dd($vehicles);
//return $vehicles;

return view('vehicles', compact('vehicles'));

});