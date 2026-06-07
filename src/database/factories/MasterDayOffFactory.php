<?php

namespace Database\Factories;

use App\Models\Master;
use App\Models\MasterDayOff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MasterDayOff>
 */
class MasterDayOffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'master_id' => Master::inRandomorder()->first()?->id ?? Master::factory(),
            'date' => $this->faker->dateTimeBetween('now', '+1 months')->format('Y-m-d'),
            'reason' => $this->faker->words(3, true),
        ];
    }
}
