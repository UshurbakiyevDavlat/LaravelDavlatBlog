<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        $posts = auth()->user()->postLikes;
        return view('personal.liked.index',compact('posts'));
    }
}
