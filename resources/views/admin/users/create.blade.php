@extends('layouts.app')
  
@section('content')
<form action="{{ route('admin.users.store') }}" method="POST">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>Password:</strong>
                <input type="text" name="password" class="form-control" placeholder="Name">
            </div>
            <label for="role">Role:</label>
            <div class="form-group">
                <select name="roles[]" multiple>
                    @foreach($roles as $id => $role)
                        <option value="{{ $id }}">{{ $role }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection  