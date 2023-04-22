<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Database\Factories\Helpers\ModelId;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::factory(5)->create();
        $posts->each(function (Post $post) {
            $post->users()->sync([ModelId::get(User::class)]);
        });
    }
}
