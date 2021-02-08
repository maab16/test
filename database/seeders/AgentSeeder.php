<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agent;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agent::updateOrCreate(
            ['name' => 'A', 'address' => 'C1Addr', 'city' => 'Dallas', 'state' => 'TX', 'status' => 'Active'],
            ['name' => 'A', 'address' => 'C1Addr', 'city' => 'Dallas', 'state' => 'TX', 'status' => 'Active'],
        );

        Agent::updateOrCreate(
            ['name' => 'A1', 'address' => 'C2Addr', 'city' => 'Irving', 'state' => 'TX', 'status' => 'Active'],
            ['name' => 'A1', 'address' => 'C2Addr', 'city' => 'Irving', 'state' => 'TX', 'status' => 'Active'],
        );

        Agent::updateOrCreate(
            ['name' => 'A2', 'address' => 'C3Addr', 'city' => 'Plano', 'state' => 'TX', 'status' => 'Inactive'],
            ['name' => 'A2', 'address' => 'C3Addr', 'city' => 'Plano', 'state' => 'TX', 'status' => 'Inactive'],
        );
    }
}
