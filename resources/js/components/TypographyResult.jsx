import React, { useMemo } from 'react';

export default function TypographyQuiz() {
  const test = useMemo(() => window.test, [window.test]);
  const questions = useMemo(() => window.question, [window.question]);



  return (
    <blockquote className="blockquote text-left" style={{ marginLeft: '300px' }}>
      <p className="h1 mb-4">Test: {test}</p>

      {questions.map((question, index) => (
        <div className="h2 mb-4" key={question.id}>
          <div>
            <p className="mb-4">
              Question {index + 1} of {questions.length};
            </p>
            <p className="mb-4">{question.question_text}</p>
          </div>
          {question.answers.map((answer, answerIndex) => (
            <div className="input-group mb-1" style={{ width: '1200px', backgroundColor: '#E7E9EB' }} key={answerIndex}>
              <div className="input-group-prepend">
                <div className="input-group-text">
                  123
                </div>
              </div>
              <div className="input-group-prepend">
                <span className="input-group-text">{answer.answer}</span>
              </div>
            </div>
          ))}
        </div>
      ))}
    </blockquote>
  );
}
