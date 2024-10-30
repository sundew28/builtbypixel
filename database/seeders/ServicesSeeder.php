<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Services;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Add Services
         *
         */ 
        $newService = Services::create([
            'services' => 'Oil change'
        ]);

        $newService = Services::create([
            'services' => 'Tyres'            
        ]);

        $newService = Services::create([
            'services' => 'Suspension'            
        ]);
        
    }
}
