<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['shift' => 'Morning'],
            ['shift' => 'Daylight'],
            ['shift' => 'Afternoon'],
            ['shift' => 'Evening'],
        ])->each(fn ($shift) => Shift::create($shift));
    }
}
