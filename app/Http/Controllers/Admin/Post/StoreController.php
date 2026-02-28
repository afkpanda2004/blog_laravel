<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        try {
            $data = $request->validated();
            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);
            $data['preview_image'] = $request->file('preview_image')->store('uploads', 'public');
            $data['main_image'] = $request->file('main_image')->store('uploads', 'public');
            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagIds);

        } catch (\Exception $exception){
            dd($exception->getMessage(), $exception->getLine(), $exception->getFile());
        }

        return redirect()->route('admin.post.index');

    }
}
