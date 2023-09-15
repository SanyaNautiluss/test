import React, { useMemo } from 'react';

export default function TypographyResult() {
  const questions = useMemo(() => window.question, [window.question]);
  const results = useMemo(() => window.responseData, [window.responseData]);

  // Calculate the percentage
  const percentage = useMemo(() => (results.total_points / questions.length) * 100, [
    results.total_points,
    questions.length,
  ]);

  return (
    <blockquote className="blockquote text-left" style={{ marginLeft: '300px' }}>
      <p className="h1 mb-4">{results.test_name} Test Results</p>
      <p className="h6 mb-4">Score: {results.total_points} of {questions.length}</p>
      <p className="mb-4">{percentage}% Correct:</p>

      {questions.map((question, index) => (
        <div className="h2 mb-4" key={question.id}>
          <div>
            <p className="h3 mb-4 font-weight-normal">
              Question {index + 1}:
            </p>
            <p className="h5 font-weight-normal mb-4 ">{question.question_text}</p>
          </div>
          {question.answers.map((answer, answerIndex) => (
            <div
              className="input-group mb-1"
              style={{
                width: '1200px',
                position: 'relative',
                backgroundColor:
                  answer.is_correct === 1
                    ? '#d4edda' // Green background for correct answer
                    : results.answers.includes(answer.id.toString())
                    ? '#f8d7da' // Blue background for user's answer
                    : 'transparent',
              }}
              key={answerIndex}
            >
              <div className="input-group-prepend">

                {/* Checkmark icon for correct answer */}
                {answer.is_correct === 1 && (
                  <span >
                    <i className="fa fa-check" />
                  </span>
                )}
                {/* Cross icon for incorrect answer */}
                {answer.is_correct !== 1 && (
                  <span >
                    <i className="fa fa-times" />
                  </span>
                )}

              </div>
              <div className="input-group-prepend">
                <span className=" h5 font-weight-normal" style={{ marginLeft: '30px' }}>
                  {answer.answer}
                </span>
                {results.answers.includes(answer.id.toString()) && (
                  <span className="input-group-text" style={{width:'135px', height:'32px', position: 'absolute', backgroundColor:'rgba(0, 0, 0, 0.2)', color:'white',  zIndex:'1', right: '0' }}>
                    Your Answer
                  </span>
                )}
                {answer.is_correct === 1 && !results.answers.includes(answer.id.toString()) && (
                  <span className="input-group-text" style={{height:'32px', position: 'absolute', right: '0', backgroundColor:'rgba(0, 0, 0, 0.2)', color:'white', }}>
                    Correct Answer
                  </span>
                )}

              </div>
            </div>
          ))}
        </div>
      ))}
    </blockquote>
  );
}
