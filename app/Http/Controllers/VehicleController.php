<?php

namespace App\Http\Controllers;

use App\Vehicle;
use App\User;
use App\Ride;
use Auth;
use Illuminate\Http\Request;

class VehicleController extends Controller
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
     * Show the form for creating a new driver.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vehicle.newVehicle');
    }

    /**
     * Store a newly created Vehicle in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $vehicle = new Vehicle;
        $vehicle->user_id = Auth::id();
        $vehicle->registration_no = request('registration_no');
        $vehicle->vehicle_model = request('vehicle_model');
        $vehicle->model_year = request('model_year');
        $vehicle->psv_insurance = request('psv_insurance');
        $vehicle->inspection_report = request('inspection_report');
        $vehicle->save();
        return redirect('/');
    }

    /**
     * Display the specified driver.
     *
     * @param  \App\vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function myRides(vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified vehicle.
     *
     * @param  \App\vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified vehicle in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified vehicle from storage.
     *
     * @param  \App\vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehicle $vehicle)
    {
        //
    }
}
