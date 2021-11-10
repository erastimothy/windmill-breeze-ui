<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
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
            'house_id' => rand(1,5),
            'type' => $this->faker->randomElement(['Bimbel','Hari Ceria','Spesial Event']),
            'note' => $this->faker->text(),
            'images' => json_encode([$this->faker->image(public_path().'/img/reports/',400,200),$this->faker->image(public_path().'/img/reports/',400,200)]),
            'kb_amount' => $this->faker->randomDigit(),
            'kk_amount' => $this->faker->randomDigit(),
            'total' => $this->faker->randomDigit(),
            'status_id' => rand(1,5),
            'stock_flow_id' => rand(1,5),
            'createdBy' => rand(1,5),
            'updatedBy' => rand(1,5),
        ];
    }
}
