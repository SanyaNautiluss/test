@extends('layouts.user')
@section('content')
<div id="result"></div>
@endsection
@section('scripts')
<script>
    window.test = @json($test),
    window.question = @json($question)
</script>
@endsection