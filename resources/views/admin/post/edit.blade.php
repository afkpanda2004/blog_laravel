@extends('admin.layouts.main')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-12">
                    <h5 class="mt-3">Редактирование поста</h5>
                    <form action="{{route('admin.post.update', $post->id)}}" method="post" enctype="multipart/form-data" class="col-4">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <input  class="form-control" name = 'title' placeholder="Название поста"
                                    value="{{$post->title}}">
                            @error('title')
                            <div class="text-danger">Это поле необходимо заполнить</div>
                            @enderror
                            <div class="form group mt-3">
                                <textarea id="summernote" name="content">
                                    {{$post->content}}

                                </textarea>
                                @error('content')
                                <div class="text-danger">Это поле надо заполнить</div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="formFile" class="form-label">Добавьте превью</label>
                                <div class="w-50 mb-2 ">
                                    <img src="{{asset('storage/' . $post->preview_image)}}" alt="preview_image" class="w-50" >
                                </div>
                                <input class="form-control" type="file" name="preview_image">
                                @error('preview_image')
                                <div class="text-danger">Это поле надо заполнить</div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="formFile" class="form-label">Добавьте изображение</label>
                                <div class="w-50 mb-2">
                                    <img src="{{asset('storage/' . $post->main_image)}}" alt="main_image" class="w-50" >
                                </div>
                                <input class="form-control" type="file" name="main_image">
                                @error('main_image')
                                <div class="text-danger">Это поле надо заполнить</div>
                                @enderror

                            </div>
                            <div class="form-floating mt-3">
                                <select name="category_id" class="form-select">
                                    <option value="" disabled {{ $post->category_id ? '' : 'selected' }}>Выберите категорию</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                            {{$category->title}}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Выберите категорию</label>
                                @error('category_id')
                                <div class="text-danger">Это поле надо заполнить</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3" >
                                <label>Добавьте тэг/тэги</label>
                                <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите тэги" style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option {{is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : ''}}
                                                value="{{$tag->id}}" >{{$tag->title}}</option>
                                    @endforeach
                                </select>
                                @error('tag_ids')
                                <div class="text-danger">Это поле надо заполнить</div>
                                @enderror
                            </div>
                            <div class="form group mt-3">
                                <button  class="btn btn-primary btn-sm">Добавить</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
