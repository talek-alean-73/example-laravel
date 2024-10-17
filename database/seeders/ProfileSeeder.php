<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;


class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Для каждого пользователя создаем профиль
        User::all()->each(function ($user) {
            $user->profile()->save(Profile::factory()->make());
        });
        
    }
}
