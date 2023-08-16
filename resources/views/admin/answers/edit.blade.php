@extends('layouts.app')
   
   @section('content')
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2>Edit Answer</h2>
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
     
       <form action="{{ route('admin.answers.update',$answers->id) }}" method="POST">
           {{ csrf_field() }}
           {{ method_field('PATCH') }}
      
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="question">{{ __('Question') }}</label>
                        <select value="{{ $answers->question_id }}" class="form-control" name="question_id" id="question">
                            @foreach($questions as $id => $question)
                                <option value="{{ $id }}">{{ $question }}</option>
                            @endforeach
                        </select>
                    </div>              
                   <div class="form-group">
                       <strong>answer:</strong>
                       <input type="text" name="answer" value="{{ $answers->answer }}" class="form-control" placeholder="Name">
                   </div>
             
                   <div class="form-group">
                       <strong>is_correct:</strong>
                       <input type="text" name="is_correct" value="{{ $answers->is_correct }}" class="form-control" placeholder="Name">
                   </div>
               </div>

               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
               <a class="btn btn-primary" href="{{ route('admin.answers.index') }}"> Back</a>
                 <button type="submit" class="btn btn-primary">Submit</button>
               </div>
           </div>
      
       </form>
   @endsection 