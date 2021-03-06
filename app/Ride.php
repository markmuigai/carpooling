<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    //
    public function User()
    {
      return $this->belongsTo(User::class);
    }

    public function Vehicle()
    {
      return $this->belongsTo(Vehicle::class);
    }
}
