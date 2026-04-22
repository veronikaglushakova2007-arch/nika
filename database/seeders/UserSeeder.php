<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Иван Петров', 'email' => 'ivan@mail.ru', 'age' => 25, 'salary' => 50000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Мария Сидорова', 'email' => 'maria@mail.ru', 'age' => 30, 'salary' => 60000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Алексей Смирнов', 'email' => 'alex@mail.ru', 'age' => 35, 'salary' => 70000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Елена Кузнецова', 'email' => 'elena@mail.ru', 'age' => 28, 'salary' => 55000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Дмитрий Васильев', 'email' => 'dmitry@mail.ru', 'age' => 40, 'salary' => 80000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ольга Павлова', 'email' => 'olga@mail.ru', 'age' => 22, 'salary' => 45000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}