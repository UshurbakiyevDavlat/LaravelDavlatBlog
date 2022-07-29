<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Personal\Comment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DeleteController extends Controller
{
    public function __invoke(Comment $comment): RedirectResponse
    {
        $comment->delete();
        return redirect()->route('personal.comment.index');
    }
}
