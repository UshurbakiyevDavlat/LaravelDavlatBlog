<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\UpdateRequest;
use App\Models\Personal\Comment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Comment $comment): RedirectResponse
    {
        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('personal.comment.index');
    }
}
