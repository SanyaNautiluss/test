@extends('layouts.appError')
    
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card-header py-3 d-flex">
                <h1>
                    Roles
                </h1>
                <div class="ml-auto">
                    <a class="btn btn-success" href="{{ route('admin.roles.create') }}">New Role</a>
                </div>
            </div><!-- /.col -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<div class="card-body">
    <table class="table table-bordered table-striped table-hover datatable datatable-category" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Permissions</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($roles as $role)
        <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->name }}</td>
            <td>
                @foreach($role->permissions as $key => $permission)
                    <span class="badge badge-info">{{ $permission->name }}</span>
                @endforeach
            </td>
            <td>
                <form action="{{ route('admin.roles.destroy',$role->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('admin.roles.edit',$role->id) }}">Edit</a>
                    {{-- @csrf
                    @method('DELETE') --}} 

                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
    <!-- /.content -->
@endsection

