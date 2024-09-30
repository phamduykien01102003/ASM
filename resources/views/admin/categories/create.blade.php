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
                                <li><a href="#">Categories</a></li>
                                <li class="active">Create</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <h2>Create Category</h2>
        {{-- action="{{ route('admin.categories.store') }}" --}}
        <form class="mt-5" method="POST" >
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name Category</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" name="image" class="form-control" id="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
