<?php

namespace Database\Seeders;

use App\Models\AttendanceStatus;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class AttendanceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['attendance_status' => 'On Time'],
            ['attendance_status' => 'Late'],
            ['attendance_status' => 'Absent'],
        ])->each(fn ($attendance_status) => AttendanceStatus::create($attendance_status));
    }
}
