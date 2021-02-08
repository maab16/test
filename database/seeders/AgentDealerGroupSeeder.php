<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AgentDealerGroup;

class AgentDealerGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AgentDealerGroup::updateOrCreate(
            ['agent_id' => 1, 'dealer_group_id' => 3, 'effective_date' => date('2018-01-10'), 'expiration_date' => date('2020-04-07')],
            ['agent_id' => 1, 'dealer_group_id' => 3],
        );

        AgentDealerGroup::updateOrCreate(
            ['agent_id' => 2, 'dealer_group_id' => 3, 'effective_date' => date('2020-04-08'), 'expiration_date' => date('2025-12-31')],
            ['agent_id' => 2, 'dealer_group_id' => 3],
        );

        AgentDealerGroup::updateOrCreate(
            ['agent_id' => 2, 'dealer_group_id' => 2, 'effective_date' => date('2015-01-15'), 'expiration_date' => date('2020-06-10')],
            ['agent_id' => 2, 'dealer_group_id' => 2],
        );

        AgentDealerGroup::updateOrCreate(
            ['agent_id' => 3, 'dealer_group_id' => 1, 'effective_date' => date('2020-01-01'), 'expiration_date' => date('2025-12-31')],
            ['agent_id' => 3, 'dealer_group_id' => 1],
        );

        AgentDealerGroup::updateOrCreate(
            ['agent_id' => 1, 'dealer_group_id' => 2, 'effective_date' => date('2020-01-01'), 'expiration_date' => date('2020-04-30')],
            ['agent_id' => 1, 'dealer_group_id' => 2],
        );
    }
}
