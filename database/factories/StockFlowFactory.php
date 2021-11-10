<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StockFlowFactory extends Factory
{
    
    public function definition()
    {
        return [
            'quantity' => $this->faker->randomNumber(),
            'type' => $this->faker->randomElement(['IN','OUT']),
            'description' => $this->faker->text(),
            'inventory_id' => rand(1,5),
            'createdBy' => rand(1,5),
            'updatedBy' => rand(1,5),
        ];
    }
}
