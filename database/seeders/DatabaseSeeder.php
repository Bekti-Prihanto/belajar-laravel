<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Post::factory(20)->create();
        
        Category::Create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::Create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::Create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

    }
}
