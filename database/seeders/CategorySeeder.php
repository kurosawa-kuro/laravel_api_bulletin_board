<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'name' => 'book',
        ]);

        Category::factory()->create([
            'name' => 'cafe',
        ]);

        Category::factory()->create([
            'name' => 'travel',
        ]);
    }
}
