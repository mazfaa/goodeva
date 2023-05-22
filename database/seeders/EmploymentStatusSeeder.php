<?php

namespace Database\Seeders;

use App\Models\EmploymentStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmploymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['employment_status' => 'Permanent'],
            ['employment_status' => 'Contract'],
            ['employment_status' => 'Probation'],
        ])->each(fn ($employment_status) => EmploymentStatus::create($employment_status));
    }
}
