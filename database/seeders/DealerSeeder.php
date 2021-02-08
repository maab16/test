<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dealer;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dealer::updateOrCreate(
            ['name' => 'C', 'address' => 'CAddr', 'city' => 'Dallas', 'state' => 'TX', 'status' => 'Active'],
            ['name' => 'C', 'address' => 'CAddr', 'city' => 'Dallas', 'state' => 'TX', 'status' => 'Active'],
        );

        Dealer::updateOrCreate(
            ['name' => 'D', 'address' => 'DAddr', 'city' => 'Miami', 'state' => 'FL', 'status' => 'Active'],
            ['name' => 'D', 'address' => 'DAddr', 'city' => 'Miami', 'state' => 'FL', 'status' => 'Active'],
        );

        Dealer::updateOrCreate(
            ['name' => 'E', 'address' => 'EAddr', 'city' => 'Memphis', 'state' => 'TN', 'status' => 'Active'],
            ['name' => 'E', 'address' => 'EAddr', 'city' => 'Memphis', 'state' => 'TN', 'status' => 'Active'],
        );

        Dealer::updateOrCreate(
            ['name' => 'E2', 'address' => 'E2Addr', 'city' => 'Los Angeles', 'state' => 'CA', 'status' => 'Active'],
            ['name' => 'E2', 'address' => 'E2Addr', 'city' => 'Los Angeles', 'state' => 'CA', 'status' => 'Active'],
        );

        Dealer::updateOrCreate(
            ['name' => 'E7', 'address' => 'E7Addr', 'city' => 'Irving', 'state' => 'TX', 'status' => 'Active'],
            ['name' => 'E7', 'address' => 'E7Addr', 'city' => 'Irving', 'state' => 'TX', 'status' => 'Active'],
        );

        Dealer::updateOrCreate(
            ['name' => 'D2', 'address' => 'D2Addr', 'city' => 'Moore', 'state' => 'OK', 'status' => 'Active'],
            ['name' => 'D2', 'address' => 'D2Addr', 'city' => 'Moore', 'state' => 'OK', 'status' => 'Active'],
        );

        Dealer::updateOrCreate(
            ['name' => 'C8', 'address' => 'C8Addr', 'city' => 'Topeka', 'state' => 'KS', 'status' => 'Active'],
            ['name' => 'C8', 'address' => 'C8Addr', 'city' => 'Topeka', 'state' => 'KS', 'status' => 'Active'],
        );
    }
}
