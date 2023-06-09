<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            User::create([
            'id' => 1,
            'name' => "Macel Admin",
            'email' => "fornalezamaricel@gmail.com",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'isAdmin' => 1
            ]);
    }
}
