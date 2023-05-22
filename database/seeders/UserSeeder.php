<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'permission_id' => 1,
                'name' => 'PT. Goodeva Technology',
                'email' => 'goodeva@goodeva.co.id',
                'phone' => '081313810593',
                'password' => bcrypt('admin')
            ],
            [
                'permission_id' => 2,
                'name' => 'Muhammad Azfa Asykarulloh',
                'email' => 'kangazfa@goodeva.co.id',
                'phone' => '081808161367',
                'password' => bcrypt('password')
            ]
        ])->each(fn ($user) => User::create($user));
    }
}
