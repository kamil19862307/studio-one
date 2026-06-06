<?php

namespace Database\Factories;

use App\Enums\ReviewStatus;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_name' => $this->faker->name(),
            'rating' => $this->faker->numberBetween(1, 5),
            'text' => $this->faker->paragraph(),
            'image' => $this->faker->word(),
            'status' => $this->faker->randomElement(ReviewStatus::cases()),
        ];
    }
}
