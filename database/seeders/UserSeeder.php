<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = "long";
        User::factory()->create([
            "name" => $name,
            "email" => "doremon1234567890@gmail.com",
            "username" => Str::slug($name, "_"),
        ]);
    }
}
