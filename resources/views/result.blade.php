@extends('layouts.user')
@section('content')
<div id="result" ></div>
@endsection
@section('scripts')
<script>
        window.question = @json($question),
        window.responseData = @json($responseData)
</script>
@endsection