<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Ride()
    {
        return $this->hasMany(Ride::class);
    }
}
