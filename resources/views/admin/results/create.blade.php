@extends('layouts.app')
  
@section('content')
<form action="{{ route('admin.results.store') }}" method="POST">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="test">@lang('pages.test')</label>
            <div class="form-group">
                <select name="test_id" multiple>
                    @foreach($tests as $test)
                        <option value="{{$test->id}}">{{$test->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>total_points</strong>
                <input type="text" name="total_points" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>time_taken</strong>
                <input type="text" name="time_taken" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('admin.results.index') }}"> Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection  