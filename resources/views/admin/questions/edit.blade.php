@extends('layouts.app')
   
   @section('content')
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2>Edit Question</h2>
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
     
       <form action="{{ route('admin.questions.update',$questions->id) }}" method="POST">
           {{ csrf_field() }}
           {{ method_field('PATCH') }}
      
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <label for="test">{{ __('Test') }}</label>
                        <select value="{{ $questions->test_id }}" class="form-control" name="test_id" id="test">
                            @foreach($tests as $id => $test)
                                <option value="{{ $id }}">{{ $test }}</option>
                            @endforeach
                        </select>
                    </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>question_text:</strong>
                       <input type="text" name="question_text" value="{{ $questions->question_text }}" class="form-control" placeholder="Name">
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
               <a class="btn btn-primary" href="{{ route('admin.questions.index') }}"> Back</a>
                 <button type="submit" class="btn btn-primary">Submit</button>
               </div>
           </div>
      
       </form>
   @endsection 