<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data): void
    {
        try {
            $tagIds = $data['tagIds'];
            unset($data['tagIds']);

            DB::beginTransaction();

            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);

            $post = Post::create($data);
            $post->tags()->attach($tagIds);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception->getTraceAsString());
            abort($exception->getMessage());
        }
    }

    public function update($data, Post $post): void
    {
        try {
            $tagIds = data_get($data, 'tagIds');
            unset($data['tagIds']);

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
    }
}
