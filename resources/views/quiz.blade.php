@extends('layouts.user')
@section('content')
<div id="quiz"></div>
@endsection
@section('scripts')
<script>
    window.category = @json($category)
</script>
@endsection