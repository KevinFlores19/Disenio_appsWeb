<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\Workers;
use App\Models\Roles;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workers>
 */
class WorkersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'user_name' =>$this->faker->userName,
            'password' => Hash::make($this->faker->password), // Usamos Hash::make para cifrar la contraseña
            'role_id' => \App\Models\Roles::inRandomOrder()->first()->id, 
        ];
    }
}
