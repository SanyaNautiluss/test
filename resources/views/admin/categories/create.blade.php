@extends('layouts.app')
  
@section('content')
<form action="{{ route('admin.categories.store') }}" method="POST">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <select name="tests" multiple>
                @foreach($tests as $test)
                    <option value="{{$test->id}}">{{$test->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('admin.categories.index') }}"> Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection  