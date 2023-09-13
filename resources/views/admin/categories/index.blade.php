@extends('layouts.appError')
    
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card-header py-3 d-flex">
                <h1>
                    @lang('pages.categories')
                </h1>
                <div class="ml-auto">
                    <a class="btn btn-success" href="{{ route('admin.categories.create') }}">New Category</a>
                </div>
            </div><!-- /.col -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<div class="card-body">
    <table class="table table-bordered table-striped table-hover datatable datatable-category" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <form action="{{ route('admin.categories.destroy',$category->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('admin.categories.edit',$category->id) }}">Edit</a>
                    {{-- @csrf
                    @method('DELETE') --}} 

                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
    <!-- /.content -->
@endsection

