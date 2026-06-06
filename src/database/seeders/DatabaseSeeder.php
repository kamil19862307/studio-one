<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\Category;
use App\Models\Master;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
        ]);

        User::factory(10)
            ->has(Master::factory())
            ->create();

        Service::factory(30)->create();


        $this->call([
            PortfolioSeeder::class,
            ReviewSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'role' => Role::Admin,
        ]);
    }
}
