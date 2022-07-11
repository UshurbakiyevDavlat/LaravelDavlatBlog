<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['preview_image'] = Storage::put('/images',$data['preview_image']);
        $data['main_image'] = Storage::put('/images',$data['main_image']);

        Post::create($data); // we do not need Service class here yet, until more complicated logic
        return redirect()->route('admin.post.index');
    }
}
