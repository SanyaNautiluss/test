@extends('layouts.user')
@section('content')
<div id="quiz"></div>
@endsection
@section('scripts')
<script>
    window.test = @json($test),
    window.question = @json($question),
    window.categories = @json($categories)

</script>
@endsection