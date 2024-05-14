<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customers;
use App\Models\Photos;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customer = Customers::inRandomOrder()->first();
        $photo = Photos::inRandomOrder()->first();
        return [
            'status' => $this->faker->randomElement(['Ordered', 'In process', 'In route', 'Delivered']),// Genera un estado aleatorio para la orden
            'notes' => $this->faker->paragraph, //Genera una nota para la orden
            'data_time' => $this->faker->dateTime()->format('Y-m-d H:i:s'), // Genera una fecha y hora aleatoria
            'invoice_number' => $this->faker->unique()->randomNumber(), // Genera un número de factura aleatorio y único
            'customer_id' => $customer->id,
            'customer_number' => $this->faker->numberBetween(1, 30),
            'photo_id' => $photo->id,
        ];
        
    }
}
