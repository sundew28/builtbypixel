<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceTypes;

class ServiceTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Add Service Types
         *
         */
        $newService = ServiceTypes::create([
            'types' => 'Full'
        ]);

        $newService = ServiceTypes::create([
            'types' => 'Interim'            
        ]);
    }
}
