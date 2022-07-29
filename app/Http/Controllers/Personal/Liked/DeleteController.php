<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DeleteController extends Controller
{
    public function __invoke(Post $post): RedirectResponse
    {
        auth()->user()->postLikes()->detach($post->id);
        return redirect()->route('personal.liked.index');
    }
}
