@extends('layouts.appi')
    
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card-header py-3 d-flex">
                <h1>
                @lang('pages.questions')
                </h1>
                <div class="ml-auto">
                    <a class="btn btn-success" href="{{ route('admin.questions.create') }}">New Question</a>
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
                <th>test_id</th>
                <th>question_text</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($questions as $question)
        <tr>
            <td>{{ $question->id }}</td>
            <td>{{ $question->test_id }}</td>
            <td>{{ $question->question_text }}</td>
            <td>
                <form action="{{ route('admin.questions.destroy',$question->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('admin.questions.edit',$question->id) }}">Edit</a>
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

