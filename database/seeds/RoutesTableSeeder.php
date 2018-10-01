<?php

use Illuminate\Database\Seeder;
use App\Route;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Route::create([
          'pickuplocation' => 'Nairobi',
          'destinationlocation' => 'Kileleshwa',

        ]);

        Route::create([
          'pickuplocation' => 'Parklands',
          'destinationlocation' => 'Westlands',
        ]);

        Route::create([
          'pickuplocation' => 'Muthaiga',
          'destinationlocation' => 'Parklands',
        ]);

        Route::create([
          'pickuplocation' => 'Kiambu',
          'destinationlocation' => 'Ngara',
        ]);

        Route::create([
          'pickuplocation' => 'Muthaiga',
          'destinationlocation' => 'Nairobi CBD',
        ]);

        Route::create([
          'pickuplocation' => 'Ngara',
          'destinationlocation' => 'Kiambu',
        ]);

        Route::create([
          'pickuplocation' => 'Nairobi CBD',
          'destinationlocation' => 'Westlands',
        ]);

        Route::create([
          'pickuplocation' => 'Chiromo',
          'destinationlocation' => 'Muthaiga',
        ]);

        Route::create([
          'pickuplocation' => 'Kiambu',
          'destinationlocation' => 'Parklands',
        ]);

        Route::create([
          'pickuplocation' => 'Chiromo',
          'destinationlocation' => 'Nairobi CBD',
        ]);

        Route::create([
          'pickuplocation' => 'Ruaka',
          'destinationlocation' => 'Chiromo',
        ]);

        Route::create([
          'pickuplocation' => 'Nairobi West',
          'destinationlocation' => 'Muthaiga',
        ]);
        Route::create([
          'pickuplocation' => 'Mombasa Road',
          'destinationlocation' => 'Nairobi CBD',
        ]);

        Route::create([
          'pickuplocation' => 'Langata',
          'destinationlocation' => 'Kiambu',
        ]);

        Route::create([
          'pickuplocation' => 'Parklands',
          'destinationlocation' => 'Kiambu',
        ]);

        Route::create([
          'pickuplocation' => 'Nairobi CBD',
          'destinationlocation' => 'Nairobi West',
        ]);

        Route::create([
          'pickuplocation' => 'Kileleshwa',
          'destinationlocation' => 'Ruaka',
        ]);

        Route::create([
          'pickuplocation' => 'Chiromo',
          'destinationlocation' => 'Nairobi West',
        ]);

        
    }
}
