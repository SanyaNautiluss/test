@extends('layouts.quiz')
@section('content')
<div id="quiz"></div>
@endsection
@section('scripts')
<script>
    window.categories = @json($categories)
</script>
@endsection