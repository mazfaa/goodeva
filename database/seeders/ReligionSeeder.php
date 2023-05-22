<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['religion' => 'Islam'],
            ['religion' => 'Christian'],
            ['religion' => 'Hindu'],
            ['religion' => 'Buddha'],
        ])->each(fn ($religion) => Religion::create($religion));
    }
}
