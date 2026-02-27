@extends('admin.layouts.main')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-12 mt-2">
                    <h5 class="mb-3">Посты</h5>
                </div>
                <div class="row">
                    <div class="col-6 mt-2">
                    <table class="table caption-top">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Название</th>
                            <th colspan="3" class="text-center">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <th>{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td class="text-center"><a href="{{route('admin.category.show', $post->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                            <td class="text-center"><a href="{{route('admin.category.edit', $post->id) }}" class="text-success"><i class="fa-solid fa-pencil"></i></a></td>

                            <td class="text-center">
                                <form action="{{route('admin.post.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-white">
                                    <i class="fa-solid fa-trash text-danger " role="button"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                <div class="col-12">
                    <a href="{{route('admin.post.create')}}" class="btn btn-success">Создать</a>
                </div>
            </div>
        </div>
    </main>
@endsection

