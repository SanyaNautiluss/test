@extends('layouts.app')
    
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card-header py-3 d-flex">
                <h1>
                    {{ __('Answers') }}
                </h1>
                <div class="ml-auto">
                <a class="btn btn-success" href="{{ route('admin.answers.create') }}">New Answer</a>
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
                <th>id</th>
                <th>question_id</th>
                <th>answer</th>
                <th>is_correct</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($answers as $answer)
        <tr>
            <td>{{ $answer->id }}</td>
            <td>{{ $answer->question_id }}</td>
            <td>{{ $answer->answer }}</td>
            <td>{{ $answer->is_correct }}</td>
            <td>
                <form action="{{ route('admin.answers.destroy',$answer->id) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('admin.answers.edit',$answer->id) }}">Edit</a>
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

