@extends('layouts.app')
  
    @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Answer</h2>
            </div>
            
        </div>
    </div>
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
     
    <form action="{{ route('admin.answers.store') }}" method="POST">
        {{ csrf_field() }}
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="question">{{ __('Question') }}</label>
                    <select class="form-control" name="question_id" id="question">
                        @foreach($questions as $id => $question)
                            <option value="{{ $id }}">{{ $question }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="answer">{{ __('answer') }}</label>
                    <input type="text" class="form-control" id="answer" placeholder="{{ __('answer') }}" name="answer" value="{{ old('answer') }}" />
                </div>
                <div class="form-group">
                    <label for="is_correct">{{ __('is_correct') }}</label>
                    <input type="text" class="form-control" id="is_correct" placeholder="{{ __('is_correct') }}" name="is_correct" value="{{ old('is_correct') }}" />
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('admin.answers.index') }}"> Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>
  @endsection  