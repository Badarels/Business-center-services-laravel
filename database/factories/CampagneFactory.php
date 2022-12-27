<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CampagneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "detail_campagne"=>$this->faker->text(100),
        ];
    }
}
