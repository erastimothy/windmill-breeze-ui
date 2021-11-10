<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class CourceMaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'path' => $this->faker->image(public_path().'/img/course-materials/',400,200),
            'createdBy' => rand(1,5),
            'updatedBy' => rand(1,5),
        ];
    }
}
