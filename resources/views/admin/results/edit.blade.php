@extends('layouts.app')
   
@section('content')
<form action="{{ route('admin.results.update',$result->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <label for="test">@lang('pages.test')</label>
                <div class="form-group">
                    <select name="test_id" multiple>
                        @foreach($test as $id => $test)
                            <option value="{{ $id }}">{{ $test }}</option>
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