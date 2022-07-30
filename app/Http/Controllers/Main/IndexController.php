<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(4);
        $newPosts = Post::orderBy('created_at','DESC')->get()->take(3);
        $topPosts = Post::withCount('userLikes')->orderBy('user_likes_count','DESC')->get()->take(4);
        $categories = Category::all();
        return view('main', compact('posts','randomPosts','newPosts','topPosts','categories'));
    }
}
