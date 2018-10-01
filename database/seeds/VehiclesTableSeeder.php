<?php

use Illuminate\Database\Seeder;
use App\Vehicle;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Vehicle::create([
          'user_id' => '2',
          'registration_no' => '5001',
          'vehicle_model' => 'Toyota Auris',
          'model_year' => '2008',
          'psv_insurance' => 'A1001',

        ]);

        Vehicle::create([
          'user_id' => '4',
          'registration_no' => '5002',
          'vehicle_model' => 'Toyota Axio',
          'model_year' => '2007',
          'psv_insurance' => 'A1005',

        ]);

        Vehicle::create([
          'user_id' => '8',
          'registration_no' => '5003',
          'vehicle_model' => 'BMW',
          'model_year' => '2014',
          'psv_insurance' => 'C1003',

        ]);

        Vehicle::create([
          'user_id' => '3',
          'registration_no' => '5004',
          'vehicle_model' => 'Mercedes',
          'model_year' => '2010',
          'psv_insurance' => 'D1005',

        ]);

        Vehicle::create([
          'user_id' => '9',
          'registration_no' => '5005',
          'vehicle_model' => 'Toyota Harrier',
          'model_year' => '2018',
          'psv_insurance' => 'A1009',

        ]);
    }
}
