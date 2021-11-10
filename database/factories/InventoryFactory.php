<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'unit' => $this->faker->word(),
            'stock' => $this->faker->randomNumber(),
            'house_id' => rand(1,5),
            'category_id' => rand(1,5),
            'description' => $this->faker->text(),
            'createdBy' => rand(1,5),
            'updatedBy' => rand(1,5),

        ];
    }
}
