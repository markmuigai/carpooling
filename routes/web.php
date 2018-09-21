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

//Upload new vehicle form
Route::get('/vehicle/create', 'VehicleController@newVehicleForm')->name('new-vehicle');

//Upload new vehicle
Route::get('/vehicle/store', 'VehicleController@storeVehicle')->name('store-vehicle');
//Update vehicle details form

//Update vehicle details

//Drivers requested rides
//accept ride, cancel ride post to database

//All my rides
//get all a drivers ride from db

//Upload Route form

//Post route data

//Request ride/Upload ride (Homepage)

//Post Ride
//Ride confirmation from driver from DB
//cancel ride

//My ride (Track ride), complete Ride
//post

//payment after complete ride

//Driver, payment received


//admin routes //sidebar with the following links
//datatables
//all drivers (vehicles)

//all users

//Confirmed rides

//Canceled rides

//Setup routes

