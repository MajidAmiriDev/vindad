<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_user_with_posts()
    {
        $user = User::factory()->create();

        $posts = Post::factory()->count(5)->create([
            'user_id' => $user->id,
        ]);
        $response = $this->getJson("/api/user/{$user->id}");
        $response->assertStatus(200);
        $response->assertJson([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ]);
        $response->assertJsonCount(5, 'posts');
        $response->assertJsonFragment([
            'id' => $posts[0]->id,
            'title' => $posts[0]->title,
            'content' => $posts[0]->content,
        ]);
    }

    public function test_user_not_found()
    {
        $response = $this->getJson('/api/user/9999');
        $response->assertStatus(404);
    }
}
