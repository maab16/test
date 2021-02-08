<?php

namespace Database\Factories;

use App\Models\DealerGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class DealerGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DealerGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'status' => 'Active',
        ];
    }
}
