@extends('layouts.app')
   
   @section('content')
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2>Edit Tests</h2>
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
     
       <form action="{{ route('admin.tests.update',$tests->id) }}" method="POST">
           {{ csrf_field() }}
           {{ method_field('PATCH') }}
      
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Name:</strong>
                       <input type="text" name="name" value="{{ $tests->name }}" class="form-control" placeholder="Name">
                   </div>
               </div>
               
               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
               <a class="btn btn-primary" href="{{ route('admin.tests.index') }}"> Back</a>
                 <button type="submit" class="btn btn-primary">Submit</button>
               </div>
           </div>
      
       </form>
   @endsection 