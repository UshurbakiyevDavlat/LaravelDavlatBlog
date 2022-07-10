<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }
}
