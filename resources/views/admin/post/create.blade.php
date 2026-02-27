@extends('admin.layouts.main')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-12">
                    <h5 class="mt-3">Добавление поста</h5>
                    <form action="{{route('admin.post.store')}}" method="post" class="col-4">
                        @csrf
                        <div class="mb-3">
                            <input  class="form-control" name = 'title' placeholder="Название поста"
                            value="{{old('title')}}">
                            @error('title')
                            <div class="text-danger">Это поле необходимо заполнить</div>
                            @enderror
                            <div class="form group mt-3">
                                <textarea id="summernote" name="content">
                                    {{old('content')}}
                                </textarea>
                                @error('content')
                                <div class="text-danger">Это поле надо заполнить</div>
                                @enderror
                            </div>
                            <div class="form group">
                                <button  class="btn btn-primary btn-sm">Добавить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
