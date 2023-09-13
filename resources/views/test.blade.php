@extends('layouts.user')
@section('content')
<div id="tests"></div>
@endsection
@section('scripts')
<script>
    window.category = @json($category)
</script>
@endsection