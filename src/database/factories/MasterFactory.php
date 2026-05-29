<?php

namespace Database\Factories;

use App\Models\Master;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Master>
 */
class MasterFactory extends Factory
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
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'photo' => $this->faker->word(),
            'experience' => $this->faker->randomDigit(),
            'description' => $this->faker->text(),
            'instagram' => $this->faker->word(),
            'telegram' => $this->faker->word(),
        ];
    }
}
