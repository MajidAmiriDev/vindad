<?php
namespace App\Services;

use App\Models\User;

class UserStatsService
{
    public function getUsersWithStats()
    {
        return User::with([
            'posts' => function ($query) {
                $query->withCount('comments')->latest();
            }
        ])
        ->withCount('posts')
        ->get()
        ->filter(function ($user) {
            $postCount = $user->posts_count;
            $commentCount = $user->posts->sum('comments_count');
            return $postCount > 5 && $commentCount > 10;
        })
        ->map(function ($user) {
            $latestPost = $user->posts->first();
            return [
                'name' => $user->name,
                'email' => $user->email,
                'posts_count' => $user->posts_count,
                'comments_count' => $user->posts->sum('comments_count'),
                'latest_post' => $latestPost ? [
                    'title' => $latestPost->title,
                    'content' => $latestPost->content,
                ] : null,
            ];
        });
    }
}
