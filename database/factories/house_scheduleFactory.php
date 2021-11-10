<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class house_scheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'house_id' => rand(1,5),
            'schedule_id' => rand(1,5),
            
        ];
    }
}
