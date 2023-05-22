<?php

namespace Database\Seeders;

use App\Models\Reason;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['reason' => 'Sick'],
            ['reason' => 'Permit'],
            ['reason' => 'Unknown'],
        ])->each(fn ($reason) => Reason::create($reason));
    }
}
