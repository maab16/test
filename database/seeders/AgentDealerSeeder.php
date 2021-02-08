<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AgentDealer;

class AgentDealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AgentDealer::updateOrCreate(
            ['agent_id' => 1, 'dealer_id' => 5, 'effective_date' => date('2018-01-10'), 'expiration_date' => date('2020-04-07')],
            ['agent_id' => 1, 'dealer_id' => 5],
        );

        AgentDealer::updateOrCreate(
            ['agent_id' => 2, 'dealer_id' => 5, 'effective_date' => date('2018-07-15'), 'expiration_date' => date('2050-12-31')],
            ['agent_id' => 2, 'dealer_id' => 5],
        );

        AgentDealer::updateOrCreate(
            ['agent_id' => 1, 'dealer_id' => 1, 'effective_date' => date('2015-01-15'), 'expiration_date' => date('2020-06-10')],
            ['agent_id' => 1, 'dealer_id' => 1],
        );

        AgentDealer::updateOrCreate(
            ['agent_id' => 3, 'dealer_id' => 7, 'effective_date' => date('2020-01-01'), 'expiration_date' => date('2025-12-31')],
            ['agent_id' => 3, 'dealer_id' => 7],
        );

        AgentDealer::updateOrCreate(
            ['agent_id' => 3, 'dealer_id' => 4, 'effective_date' => date('2021-01-01'), 'expiration_date' => date('2021-06-30')],
            ['agent_id' => 3, 'dealer_id' => 4],
        );
    }
}
