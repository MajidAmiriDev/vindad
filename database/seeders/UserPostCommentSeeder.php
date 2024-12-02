<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class UserPostCommentSeeder extends Seeder
{
    public function run()
    {
        User::factory(6)->create()->each(function ($user) {
            $user->posts()->createMany(Post::factory(6)->make()->toArray())->each(function ($post) {
                Comment::factory(6)->create([
                    'post_id' => $post->id,
                    'user_id' => $post->user_id,
                ]);
            });
        });
    }
}

