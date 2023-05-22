<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AttendanceStatusSeeder::class,
            BranchSeeder::class,
            DivisionSeeder::class,
            EmployeeSeeder::class,
            EmploymentStatusSeeder::class,
            GenderSeeder::class,
            JobLevelSeeder::class,
            ManagerSeeder::class,
            MaritalStatusSeeder::class,
            PermissionSeeder::class,
            ProfessionSeeder::class,
            ReasonSeeder::class,
            ReligionSeeder::class,
            ShiftSeeder::class,
            UserSeeder::class
        ]);
    }
}
