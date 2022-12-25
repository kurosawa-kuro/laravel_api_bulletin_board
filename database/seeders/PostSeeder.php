<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->create([
            'user_id' => 1,
            'category_id' => 1,
        ]);
        Post::factory()->create([
            'user_id' => 1,
            'category_id' => 1,
        ]);
        Post::factory()->create([
            'user_id' => 1,
            'category_id' => 2,
        ]);
        Post::factory()->create([
            'user_id' => 1,
            'category_id' => 3,
        ]);
        Post::factory()->create([
            'user_id' => 2,
            'category_id' => 2,
        ]);
        Post::factory()->create([
            'user_id' => 2,
            'category_id' => 1,
        ]);
    }
}
