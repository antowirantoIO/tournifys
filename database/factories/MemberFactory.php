<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
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
            'team_id' => $this->faker->numberBetween(1, 10),
            'nickname' => $this->faker->name,
            'id_user_game' => $this->faker->numberBetween(11000000, 12222223330),
        ];
    }
}
