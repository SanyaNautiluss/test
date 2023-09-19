@extends('layouts.app')
  
@section('content')
<form action="{{ route('admin.roles.store') }}" method="POST">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <label for="permission">Permissions:</label>
            <div class="form-group">
                <select name="permissions[]" multiple>
                    @foreach($permissions as $id => $permission)
                        <option value="{{ $id }}">{{ $permission }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('admin.roles.index') }}"> Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection  