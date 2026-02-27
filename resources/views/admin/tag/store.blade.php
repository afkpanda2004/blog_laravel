@extends('admin.layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-12 mt-3">

                    <h5 class="mb-3">Тэги</h5>
                </div>

                <div class="col-12">
                    <a href="{{route('admin.tag.create')}}" class="btn btn-success">Создать</a>
                </div>
            </div>
        </div>
    </main>
@endsection
