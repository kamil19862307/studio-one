<?php

namespace Database\Seeders;

use App\Models\MasterDayOff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterDayOffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterDayOff::factory()->count(20)->create();
    }
}
