@extends('layouts.app')
  
@section('content') 
<form action="{{ route('admin.questions.store') }}" method="POST">
    {{ csrf_field() }}
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label for="question_text">{{ __('question text') }}</label>
                <input type="text" class="form-control" id="question_text" placeholder="{{ __('question text') }}" name="question_text" value="{{ old('question_text') }}" />
            </div>
            <label for="test">{{ __('Test') }}</label>
            <div class="form-group">
                <select name="test_id" multiple>
                    @foreach($tests as $id => $test)
                        <option value="{{ $id }}">{{ $test }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('admin.questions.index') }}"> Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection  