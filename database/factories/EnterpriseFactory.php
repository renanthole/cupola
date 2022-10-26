<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EnterpriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->company(),
            "description" => $this->faker->text(500),
            "address" => $this->faker->address(),
            "contact" => $this->faker->phoneNumber(),
            "email" => $this->faker->unique()->safeEmail(),
        ];
    }
}
