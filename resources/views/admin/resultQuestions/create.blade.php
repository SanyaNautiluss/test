@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tests</h1>

    <form>
        <div class="form-group">
            <label for="select-test">Select a test:</label>
            <select class="form-control" id="select-test">
                <option value="">Select a test</option>
                @foreach ($tests as $test)
                <option value="{{ $test->id }}">{{ $test->name }}</option>
                @endforeach
            </select>
        </div>
    </form>

    <!-- Display all questions of the selected test -->
    <div id="all-questions" style="display:none;">
        <h2>All Questions of the Test</h2>
        <ul id="question-list"></ul>
    </div>

    <!-- Display all answers of the selected question -->
    <div id="all-answers" style="display:none;">
        <h2>All Answers of the Question</h2>
        <ul id="answer-list"></ul>
    </div>
</div>

<script>
    const tests = @json($tests);

    const selectTest = document.getElementById('select-test');
    const allQuestionsDiv = document.getElementById('all-questions');
    const allAnswersDiv = document.getElementById('all-answers');
    const questionList = document.getElementById('question-list');
    const answerList = document.getElementById('answer-list');

    selectTest.addEventListener('change', function () {
        const selectedTestId = this.value;
        if (selectedTestId) {
            const selectedTest = tests.find(test => test.id == selectedTestId);
            const questions = selectedTest.questions;
            questionList.innerHTML = '';
            questions.forEach(question => {
                const listItem = document.createElement('li');
                listItem.textContent = question.question_text;
                listItem.style.cursor = 'pointer'; // Add pointer cursor to indicate clickability
                listItem.addEventListener('click', () => {
                    // When a question is clicked, display its answers
                    displayAnswers(question.answers);
                });
                questionList.appendChild(listItem);
            });
            allQuestionsDiv.style.display = 'block';
        } else {
            allQuestionsDiv.style.display = 'none';
        }
    });

    function displayAnswers(answers) {
        answerList.innerHTML = '';
        answers.forEach(answer => {
            const listItem = document.createElement('li');
            listItem.textContent = answer.answer;
            listItem.style.cursor = 'pointer'; // Add pointer cursor to indicate clickability
            listItem.addEventListener('click', () => {
                // When an answer is clicked, you can save it to the database here
                saveAnswerToDatabase(answer);
            });
            answerList.appendChild(listItem);
        });
        allAnswersDiv.style.display = 'block';
    }

    function saveAnswerToDatabase(answer) {
        // Implement the logic to save the answer to the database here
        console.log('Answer saved to the database:', answer);
    }
</script>
@endsection