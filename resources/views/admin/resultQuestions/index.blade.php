@extends('layouts.appError')
    
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card-header py-3 d-flex">
                <h1>
                @lang('pages.resultQuestions')
                </h1>
                <div class="ml-auto">
                    <a class="btn btn-success" href="{{ route('admin.resultQuestions.create') }}">New Result</a>
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
                <th>question_id</th>
                <th>selected_answers</th>
                <th>is_correct</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($resultQuestions as $resultQuestion)
        <tr>
            <td>{{ $resultQuestion->id }}</td>
            <td>{{ $resultQuestion->question_id }}</td>
            <td>{{ $resultQuestion->selected_answers }}</td>
            <td>{{ $resultQuestion->is_correct }}</td>
            <td>
                <form action="{{ route('admin.resultQuestions.destroy',$resultQuestion->id) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('admin.resultQuestions.edit',$resultQuestion->id) }}">Edit</a>
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

