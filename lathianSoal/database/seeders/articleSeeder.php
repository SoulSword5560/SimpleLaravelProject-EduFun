<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;

class articleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            Article::create([
                'title' => $faker->sentence(4),
                'excerpt' => $faker->text(100),
                'content' => $faker->paragraph(5),
                'author' => $faker->randomElement(['Jonathan', 'Michael', 'William']),
                'category' => $faker->randomElement(['Data Science', 'Network Security']),
                'image' => 'https://picsum.photos/400/300?random=' . $i,
                'published_at' => $faker->date(),
            ]);
        }
    }
}
