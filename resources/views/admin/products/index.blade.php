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
                                <li><a href="#">product</a></li>
                                <li class="active">list</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <h2>List Product</h2>
        <table class="table mt-5 table-bordered table-striped-columns table-light">
            <thead>
                <tr>

                    <th scope="col">id</th>
                    <th scope="col">Name Product</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">view</th>
                    <th scope="col">quantity</th>
                    <th scope="col">Category</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $product)
                    @csrf
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <img src="{{ Storage::url($product->image) }}" alt="" width="50px">
                        </td>
                        <td>{{ $product->price }}</td>
                        {{-- <td>{{ $product->content }}</td> --}}
                        <td>{{ $product->view }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td class="text-nowrap d-flex justify-content-center" style="gap: 10px;">
                            <a href="{{ route('products.show', $product) }}" class="btn btn-primary">
                                <i class="fa-regular fa-eye"></i> xem
                            </a>
                            <a class="btn btn-warning" href="{{ route('products.edit', $product) }}">
                                <i class="fa-solid fa-pen-to-square"></i> sửa
                            </a>
                            <form action="{{ route('products.destroy', $product) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('are you sure')"
                                    class="btn btn-danger">delete</button>
                            </form>
                        </tr>
                @endforeach

            </tbody>

        </table>
        {{ $data->links() }}




    </div>
@endsection
