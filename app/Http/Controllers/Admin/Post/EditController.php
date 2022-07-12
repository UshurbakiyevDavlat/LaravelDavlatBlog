<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class EditController extends Controller
{
    public function __invoke(Post $post): Factory|View|Application
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit', compact('post','categories','tags'));
    }
}
