<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['RC','RK']),
            'area_id' => rand(1,2),
            'opening_date' => $this->faker->date(),
            'address' => $this->faker->address(),
            'owner' => $this->faker->name(),

        ];
    }
}
