@extends('admin.layouts.main')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-12">
                    <h5 class="mt-3">Редактирование тэга</h5>
                    <form action="{{route('admin.tag.update', $tag->id)}}" method="post" class="col-4">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <input  class="form-control mt-3" name = 'title' placeholder="Название тэга" value="{{$tag->title}}">
                            @error('title')
                            <div class="text-danger"></div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Изменить</button>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
