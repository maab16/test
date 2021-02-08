<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DealerGroup;

class DealerGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DealerGroup::updateOrCreate(
            ['name' => 'B1', 'address' => 'B1Addr', 'city' => 'Dallas', 'state' => 'TX', 'status' => 'Active'],
            ['name' => 'B1', 'address' => 'B1Addr', 'city' => 'Dallas', 'state' => 'TX', 'status' => 'Active'],
        );

        DealerGroup::updateOrCreate(
            ['name' => 'B2', 'address' => 'B2Addr', 'city' => 'Miami', 'state' => 'FL', 'status' => 'Active'],
            ['name' => 'B2', 'address' => 'B2Addr', 'city' => 'Miami', 'state' => 'FL', 'status' => 'Active'],
        );

        DealerGroup::updateOrCreate(
            ['name' => 'B3', 'address' => 'B3Addr', 'city' => 'Memphis', 'state' => 'TN', 'status' => 'Active'],
            ['name' => 'B3', 'address' => 'B3Addr', 'city' => 'Memphis', 'state' => 'TN', 'status' => 'Active'],
        );

        DealerGroup::updateOrCreate(
            ['name' => 'B4', 'address' => 'B4Addr', 'city' => 'Moore', 'state' => 'OK', 'status' => 'Active'],
            ['name' => 'B4', 'address' => 'B4Addr', 'city' => 'Moore', 'state' => 'OK', 'status' => 'Active'],
        );
    }
}
