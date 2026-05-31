<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = $this->faker->sentence(),
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(100, 5000),
            'duration' => $this->faker->numberBetween(10, 60),
            'category_id' => Category::inRandomOrder()->first()?->id ?? Category::factory(),
            'image' => $this->faker->word(),
        ];
    }
}
