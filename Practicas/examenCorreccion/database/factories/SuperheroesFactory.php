<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Superheroes>
 */
class SuperheroesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hero_name' => $this->faker->unique()->firstName,
            'real_name'     =>  $this->faker->name(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'universe_id'   =>  $this->faker->numberBetween(1,3),
            'logo_id'       =>  $this->faker->numberBetween(1,20)
        ];
    }
}
