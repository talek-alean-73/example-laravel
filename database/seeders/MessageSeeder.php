<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;
use App\Models\User;


class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = User::all();

        // Генерируем сообщения между случайными пользователями
        $users->each(function ($publishUser) use ($users) {
            // Выбираем случайное количество получателей
            $consumers = $users->where('id', '!=', $publishUser->id)->random(rand(1, 5));

            $consumers->each(function ($consumerUser) use ($publishUser) {
                Message::factory()->create([
                    'publish_id' => $publishUser->id,
                    'consumer_id' => $consumerUser->id,
                ]);
            });
        });
    }

}
