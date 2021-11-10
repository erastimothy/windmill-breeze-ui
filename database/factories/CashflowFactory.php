<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CashflowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => Carbon::now()->format('Y-m-d'),
            'name' => $this->faker->name(),
            'type' => $this->faker->randomElement(['DEBIT','CREDIT']),
            'amount' => $this->faker->randomNumber(),
            'description' => $this->faker->text(),
            'image' => $this->faker->image(public_path().'/img/cashflows/',400,200),
            'createdBy' => rand(1,5),
            'area_id' => rand(1,5),
            'status_id' => rand(1,3),
        ];
    }
}
