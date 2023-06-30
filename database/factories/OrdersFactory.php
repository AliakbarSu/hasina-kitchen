<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'customer_name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'note' => $this->faker->text(),
            'total' => $this->faker->randomNumber(),
            'status' => ["pending", "completed", 'canceled'][array_rand([1, 2, 3], 1)]
        ];
    }
}