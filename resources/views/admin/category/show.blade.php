@extends('admin.layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="row mb-2">
                <div class="col-sm-6 mt-2 d-flex align-items-center">
                    <h5 class="m-0 mr-2 ">{{$category->title}}</h5>
                    <a href="{{ route('admin.category.edit', $category->id) }}" class="text-success"><i class="fa-solid fa-pencil ms-2" ></i></a>
                    <form action="{{route('admin.category.destroy', $category->id) }}" method="POST">
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
                            <td>{{$category->id}}</td>
                        </tr>
                        <tr>
                            <th>Название</th>
                            <td>{{$category->title}}</td>

                        </tr>
                        </tbody>
                    </table>

            </div>
        </div>
    </main>
@endsection
