<?php

namespace Database\Seeders;

use App\Models\MaritalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['marital_status' => 'Single'],
            ['marital_status' => 'Married'],
            ['marital_status' => 'Widow'],
            ['marital_status' => 'Widower'],
        ])->each(fn ($marital_status) => MaritalStatus::create($marital_status));
    }
}
