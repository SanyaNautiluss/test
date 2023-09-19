@extends('layouts.app')

@section('content')
<div class="blockquote text-left" style="width: 1200px; margin-left: 20px; margin-top:20px; position: relative;">
    <p class="h2 mb-4">Test № {{ $result->test_id }};<a class="btn btn-primary" href="{{ route('admin.results.index') }}" style="position: absolute; right: 0;"> Back</a></p>
    <p class="h2 mb-4">Result № {{ $result->id }};</p>
    <p class="h4 mb-2">Score: {{ $result['total_points'] }} of {{ count($questions) }};</p>
    <p class="h5 mb-2">Time spent: {{ $result['time_taken'] }}</p>
    @foreach ($questions as $index => $question)
    <div class="h2 mb-4">
        <div>
            <p class="mb-4">
                Question {{ $index + 1 }} of {{ count($questions) }};
            </p>
            <p class="mb-4">{{ $question->question_text }}</p>
        </div>
        @foreach ($question->answers as $answerIndex => $answer)
        @php
        $resultAnswersArray = explode(',', $result['answers']);
        $backgroundColor = $answer->is_correct == 1 ? '#d4edda' : (in_array($answer->id, $resultAnswersArray) ? '#f8d7da' : 'transparent');
        @endphp

        <div class="input-group mb-1" style=" background-color: {{ $backgroundColor }}; ">
            <div class="input-group-prepend">
                @if ($answer['is_correct'] === 1 && in_array($answer->id, $resultAnswersArray))
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg mt-2 ml-1">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                </svg>
                @elseif ($answer['is_correct'] !== 1 && in_array($answer->id, $resultAnswersArray))
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg mt-2 ml-1">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                </svg>
                @endif
            </div>

            <div class="input-group-prepend" style="margin-left:10px;">
                <span class="h5 font-weight-normal">{{ $answer->answer }}</span>
            </div>

            @if(in_array($answer->id, $resultAnswersArray))
            <span class="h5 p-1" style="position: absolute; right: 0; background-color: rgba(0, 0, 0, 0.2); z-index: 1; height: 32px; width: 135px;">
                Your Answer
            </span>
            @elseif($answer->is_correct === 1 && !in_array($answer->id, $resultAnswersArray))
            <span class="h5 p-1" style="position: absolute; right: 0; background-color: rgba(0, 0, 0, 0.2); color: white; height: 32px; width: 135px;">
                Correct Answer
            </span>
            @endif
        </div>
        @endforeach
    </div>
    @endforeach
</div>
@endsection
