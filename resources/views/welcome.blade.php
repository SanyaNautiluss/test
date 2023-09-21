@extends('layouts.user')
@section('content')
<div id="welcome"></div>
@endsection
@section('scripts')
<script>
    window.categories = @json($categories),
    window.user = {!! auth()->user() !!};
</script>
@endsection