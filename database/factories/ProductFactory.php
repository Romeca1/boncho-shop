<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "title" => $this->faker->title(),
            "information" => $this->faker->text(),
            "price" => rand(150, 550),
            "details" => $this->faker->text(),
            "specification" => $this->faker->text(),
            "category_id" => rand(1,6),
        ];
    }
}
