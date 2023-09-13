@extends('layouts.appError')
    
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card-header py-3 d-flex">
                <h1>
                @lang('pages.tests')
                </h1>
                <div class="ml-auto">
                    <a class="btn btn-success" href="{{ route('admin.tests.create') }}">New Test</a>
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
        @foreach ($tests as $test)
        <tr>
            <td>{{ $test->id }}</td>
            <td>{{ $test->name }}</td>
            <td>
                <form action="{{ route('admin.tests.destroy',$test->id) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('admin.tests.edit',$test->id) }}">Edit</a>
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

