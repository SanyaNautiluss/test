@extends('layouts.user')
@section('content')
<div id="welcome"></div>
@endsection
@section('scripts')
<script>
    window.categories = @json($categories)
</script>
@endsection