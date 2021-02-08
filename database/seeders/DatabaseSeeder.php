<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agent;
use App\Models\DealerGroup;
use App\Models\Dealer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AgentSeeder::class,
            DealerGroupSeeder::class,
            DealerSeeder::class,
            AgentDealerSeeder::class,
            AgentDealerGroupSeeder::class,
            DealerGroupDealerSeeder::class,
        ]);

    //     Agent::factory(3)->create();
    //     DealerGroup::factory(4)->create();
    //     Dealer::factory(7)->create();
    }
}
