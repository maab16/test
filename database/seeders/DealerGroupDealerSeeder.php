<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DealerGroupDealer;

class DealerGroupDealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DealerGroupDealer::updateOrCreate(
            ['dealer_group_id' => 1, 'dealer_id' => 1],
            ['dealer_group_id' => 1, 'dealer_id' => 1],
        );

        DealerGroupDealer::updateOrCreate(
            ['dealer_group_id' => 1, 'dealer_id' => 2],
            ['dealer_group_id' => 1, 'dealer_id' => 2],
        );

        DealerGroupDealer::updateOrCreate(
            ['dealer_group_id' => 1, 'dealer_id' => 3],
            ['dealer_group_id' => 1, 'dealer_id' => 3],
        );

        DealerGroupDealer::updateOrCreate(
            ['dealer_group_id' => 1, 'dealer_id' => 4],
            ['dealer_group_id' => 1, 'dealer_id' => 4],
        );

        DealerGroupDealer::updateOrCreate(
            ['dealer_group_id' => 2, 'dealer_id' => 5],
            ['dealer_group_id' => 2, 'dealer_id' => 5],
        );

        DealerGroupDealer::updateOrCreate(
            ['dealer_group_id' => 3, 'dealer_id' => 6],
            ['dealer_group_id' => 3, 'dealer_id' => 6],
        );

        DealerGroupDealer::updateOrCreate(
            ['dealer_group_id' => 4, 'dealer_id' => 7],
            ['dealer_group_id' => 4, 'dealer_id' => 7],
        );
    }
}
