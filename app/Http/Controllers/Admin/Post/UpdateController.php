<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        $tagIds = data_get($data, 'tagIds');
        unset($data['tagIds']);

        try {
            DB::beginTransaction();

            foreach ($data as $key => $value) {
                if (str_contains($key, 'image')) {
                    $data[$key] = Storage::disk('public')->put('/images', data_get($data, $key));
                }
            }

            $post->update($data);
            $post->tags()->sync($tagIds);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception->getTraceAsString());
            abort($exception->getMessage());
        }

        return redirect()->route('admin.post.index');
    }
}
