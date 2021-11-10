<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'report_id' => rand(1,5),
            'user_id' => rand(1,5),
            'status_id' => rand(1,3),
            'admission_time' => Carbon::now()->format('H:i:s'),
            'home_time' => Carbon::now()->format('H:i:s'),
        ];
    }
}
