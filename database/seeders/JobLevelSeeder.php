<?php

namespace Database\Seeders;

use App\Models\JobLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['job_level' => 'Staff'],
            ['job_level' => 'Supervisor'],
            ['job_level' => 'Manager'],
            ['job_level' => 'CEO'],
        ])->each(fn ($job_level) => JobLevel::create($job_level));
    }
}
