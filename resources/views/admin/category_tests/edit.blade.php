@extends('layouts.app')
   
   @section('content')
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2>Edit Category_test</h2>
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
     
       <form action="{{ route('admin.category_tests.update',$category_tests->id) }}" method="POST">
           {{ csrf_field() }}
           {{ method_field('PATCH') }}
      
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                    <label for="category">{{ __('Category') }}</label>
                    <select value="{{ $category_tests->category_id }}" class="form-control" name="category_id" id="category">
                        @foreach($categories as $id => $category)
                            <option value="{{ $id }}">{{ $category }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="test">{{ __('Test') }}</label>
                    <select value="{{ $category_tests->test_id }}" class="form-control" name="test_id" id="test">
                        @foreach($tests as $id => $test)
                            <option value="{{ $id }}">{{ $test }}</option>
                        @endforeach
                    </select>
                </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
               <a class="btn btn-primary" href="{{ route('admin.category_tests.index') }}"> Back</a>
                 <button type="submit" class="btn btn-primary">Submit</button>
               </div>
           </div>
      
       </form>
   @endsection 