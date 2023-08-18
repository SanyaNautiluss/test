@extends('layouts.app')
   
@section('content')
<form action="{{ route('admin.questions.update',$question->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="test">@lang('pages.test')</label>
            <div class="form-group">
                <select name="test_id" id="test" multiple>
                    @foreach($tests as $id => $test)
                        <option value="{{ $id }}">{{ $test }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('pages.question.text')</strong>
                <input type="text" name="question_text" value="{{ $question->question_text }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('admin.questions.index') }}"> Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection 