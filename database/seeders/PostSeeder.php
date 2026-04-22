<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('posts')->insert([
                'title' => 'Пост ' . $i,
                'slug' => 'post-' . $i,
                'likes' => rand(10, 200),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}