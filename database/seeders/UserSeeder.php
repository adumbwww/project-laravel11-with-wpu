<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Adam Widianto',
            'username' => 'adamwidianto',
            'email' => 'adamwidianto19@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('adambackend123'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'John Dough',
            'username' => 'johndough',
            'email' => 'johndough@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('johndoughfrontend123'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Jane Doe',
            'username' => 'janedoe',
            'email' => 'jane_doe@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('janedoeuiux123'),
            'remember_token' => Str::random(10)
        ]);

        User::factory(5)->create();
    }
}
