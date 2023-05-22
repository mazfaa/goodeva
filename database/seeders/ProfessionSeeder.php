<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['profession' => 'CEO'],
            ['profession' => 'HRD'],
            ['profession' => 'GA'],
            ['profession' => 'Financial Staff'],
            ['profession' => 'Software Engineer'],
            ['profession' => 'Accounting'],
            ['profession' => 'Marketing'],
        ])->each(fn ($profession) => Profession::create($profession));
    }
}
