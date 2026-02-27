@extends('admin.layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="row mb-2">
                <div class="col-sm-6 mt-2 d-flex align-items-center">
                    <h5 class="m-0 mr-2 ">{{$post->title}}</h5>
                    <a href="{{ route('admin.post.edit', $post->id) }}" class="text-success"><i class="fa-solid fa-pencil ms-2" ></i></a>
                    <form action="{{route('admin.post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-white">
                            <i class="fa-solid fa-trash text-danger " role="button"></i>
                        </button>
                    </form>
                </div>
                <div class="row">
                    <div class="col-6 mt-2">
                    <table class="table caption-top">
                        <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{$post->id}}</td>
                        </tr>
                        <tr>
                            <th>Название</th>
                            <td>{{$post->title}}</td>

                        </tr>
                        </tbody>
                    </table>

            </div>
        </div>
    </main>
@endsection
