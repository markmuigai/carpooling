<?php

namespace App\Http\Controllers;

use App\Ride;
use App\User;
use Auth;
use Illuminate\Http\Request;

class RideController extends Controller
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
     * Show the form for creating a new Route.
     *
     * @return \Illuminate\Http\Response
     */
    public function newRideForm()
    {
        //
        return view('Home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRide(Request $request)
    {
        //
        $ride = new Ride;
        $ride->user_id = Auth::id();
        $ride->pickup_location = request('pickup_location');
        $ride->pickup_destination = request('pickup_destination');
        //Retrieve a user who owns a car. The car should be one that
        //only operates in the provided route
        $ride->driver = User::whereHas('vehicles' ,function ($query){
            $query->where('route', $routeId);
        })->get();

    }

    public function rideConfirmation(Ride $ride){
        //select the logged in users posted ride that has not yet
        //been confirmed
        $ride = Ride::where('confirmation', 'false')
                ->where('user_id', Auth::id())
                ->get();

        //User cancels Ride, default false. Receive status from ajax button
        $ride->cancelledByUser =

        //Driver cancels ride, default false. Receive status from ajax button
        $ride->cancelledByDriver =


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function edit(Ride $ride)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ride $ride)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ride $ride)
    {
        //
    }
}
