@extends('layouts.app')
  
@section('content')
<form action="{{ route('admin.answers.store') }}" method="POST">
    {{ csrf_field() }}
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="question">@lang('pages.question')</label>
            <div class="form-group">
                <select name="question_id" id="question" multiple>
                    @foreach($question as $id => $question)
                        <option value="{{ $id }}">{{ $question }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="answer">@lang('pages.answer')</label>
                <input type="text" class="form-control" id="answer" placeholder="{{ __('answer') }}" name="answer" value="{{ old('answer') }}" />
            </div>
            <label for="is_correct">@lang('pages.correct')</label>
            <div class="form-group">
                <select name="is_correct" multiple>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('admin.answers.index') }}"> Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection  