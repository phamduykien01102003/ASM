@extends('admin.layouts.master')

@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Category</a></li>
                                <li class="active">list</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <h2>List Category</h2>
        
        <table class="table mt-5 table-bordered table-striped-columns table-light">
            <thead>
                <tr>

                    <th scope="col">id</th>
                    <th scope="col">Name Category</th>
                    <th scope="col">Image</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <img src="{{ Storage::url($category->image) }}" alt="" width="50px">
                        </td>

                        <td class="text-nowrap d-flex justify-content-center" style="gap: 10px;">
                            <a href="{{ route('categories.show', $category) }}" class="btn btn-primary">
                                <i class="fa-regular fa-eye"></i> xem
                            </a>
                            <a class="btn btn-warning" href="{{ route('categories.edit', $category) }}">
                                <i class="fa-solid fa-pen-to-square"></i> sửa
                            </a>
                            <form action="{{ route('categories.destroy', $category) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('are you sure')" class="btn btn-danger">delete</button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $data->links() }}


      
    </div>
@endsection
