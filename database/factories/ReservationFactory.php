<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Resource;
use App\Models\Reservation;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
          return [
            'user_id' => User::factory(),
            'resource_id' => Resource::factory(),
            'start_time' => $this->faker->dateTimeBetween('now', '+2 days'),
            'end_time' => $this->faker->dateTimeBetween('+3 days', '+5 days'),
            'status' => 'pending',
        ];
    }
}
