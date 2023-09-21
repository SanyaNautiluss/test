@extends('layouts.app')
  
@section('content')
<form action="{{ route('admin.tests.store') }}" method="POST">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>@lang('pages.test')</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

            <label for="test">@lang('pages.category')</label>
            <div id="categorySelector"></div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 pt-4 text-center">
            <a class="btn btn-primary" href="{{ route('admin.tests.index') }}"> Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection  
@section('scripts')
<script>
    window.categories = @json($categories)
</script>
@endsection