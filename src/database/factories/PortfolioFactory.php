<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Master;
use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->word();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'category_id' => Category::inRandomOrder()->first()?->id ?? Category::factory(),
            'master_id' => Master::inRandomOrder()->first()?->id ?? Master::factory(),
            'image' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
