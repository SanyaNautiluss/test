@extends('layouts.app')
   
@section('content')
<form action="{{ route('admin.answers.update',$answer->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="question">{{ __('Question') }}</label>
                <select name="question_id" id="question" multiple>
                    @foreach($question as $id => $question)
                        <option value="{{ $id }}">{{ $question }}</option>
                    @endforeach
                </select>
            </div>              
            <div class="form-group">
                <strong>answer:</strong>
                <input type="text" name="answer" value="{{ $answer->answer }}" class="form-control" placeholder="Name">
            </div>
            <label for="is_correct">{{ __('is_correct') }}</label>
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