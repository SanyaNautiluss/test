@extends('layouts.app')
    
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card-header py-3 d-flex">
                <h1>
                    {{ __('Category_test') }}
                </h1>
                <div class="ml-auto">
                <a class="btn btn-success" href="{{ route('admin.category_tests.create') }}">New category_test</a>
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
                <th>category_id</th>
                <th>test_id</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($category_tests as $category_test)
        <tr>
            <td>{{ $category_test->category_id }}</td>
            <td>{{ $category_test->test_id }}</td>
            <td>
                <form action="{{ route('admin.category_tests.destroy',$category_test->id) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('admin.category_tests.edit',$category_test->id) }}">Edit</a>
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

