@extends('admin.layouts.main')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-12">
                    <h5 class="mt-3">Добавление тэга</h5>
                    <form action="{{route('admin.tag.store')}}" method="post" class="col-4">
                        @csrf
                        <div class="mb-3">
                            <input  class="form-control" name = 'title' placeholder="Название тэга" required>
                            @error('title')
                            <div class="text-danger"></div>
                            @enderror
                        </div>
                        <button  class="btn btn-primary btn-sm">Добавить</button>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
