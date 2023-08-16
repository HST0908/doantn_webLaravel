<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;
use Illuminate\Support\Testing\Fakes\Fake;
use PhpParser\Node\Stmt\For_;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //khoi tao doi tuong faker
        $faker = Faker::create();
        //vong lap tao bai post
        for($i = 0; $i > 6; $i++){
            Post::create([
                'title'=> $faker->sentence(6,true),
                'body'=>  $faker->paragraph(3,true)
            ]);
        }
    }
}
