<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            'location' => $this->faker->address,
            'registration_open' => $this->faker->dateTime,
            'registration_close' => $this->faker->dateTime,
            'event_start' => $this->faker->dateTime,
            'event_end' => $this->faker->dateTime,
            'image' => $this->faker->imageUrl,
            'max_participants' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'category' => $this->faker->randomElement(['online', 'offline']),
            'user_id' => $this->faker->numberBetween(1, 10),
            'game' => $this->faker->randomElement(['CS:GO', 'Dota 2', 'League of Legends']),
        ];
    }
}
