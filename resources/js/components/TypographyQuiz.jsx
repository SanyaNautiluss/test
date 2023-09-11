import React, { useMemo, useState, useEffect } from 'react';
import axios from 'axios';

export default function TypographyQuiz() {
  const test = useMemo(() => window.test, [window.test]);
  const questions = useMemo(() => window.question, [window.question]);
  const [visibleQuestionIndex, setVisibleQuestionIndex] = useState(0);
  const isFirstQuestion = visibleQuestionIndex === 0;
  const isLastQuestion = visibleQuestionIndex === questions.length - 1;

  const showNextQuestion = () => {
    const nextIndex = (visibleQuestionIndex + 1) % questions.length;
    setVisibleQuestionIndex(nextIndex);
  };
  const showPreviousQuestion = () => {
    const previousIndex = (visibleQuestionIndex - 1 + questions.length) % questions.length;
    setVisibleQuestionIndex(previousIndex);
  };

  const [userAnswers, setUserAnswers] = useState([]);

  useEffect(() => {
    // Add an effect to set the CSRF token as a default header
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken;
  }, []);

  const handleAnswerChange = (questionId, answer, isCorrect) => {
    const updatedUserAnswers = [...userAnswers];
    const existingAnswerIndex = updatedUserAnswers.findIndex(
      (userAnswer) => userAnswer.questionId === questionId
    );

    if (existingAnswerIndex !== -1) {
      // Update the selected answer for the existing question
      updatedUserAnswers[existingAnswerIndex].selectedAnswers.push(answer);
    } else {
      // Create a new answer object for the question
      updatedUserAnswers.push({
        questionId,
        selectedAnswers: [answer],
        isCorrect,
      });
    }

    setUserAnswers(updatedUserAnswers);
  };

  const addDefaultAnswerIfNecessary = (question) => {
    const existingAnswer = userAnswers.find((userAnswer) => userAnswer.questionId === question.id);

    if (!existingAnswer) {
      handleAnswerChange(question.id, null, null);
    } else if (existingAnswer.selectedAnswers.includes(null)) {
      // Remove 'null' from the selected answers
      const updatedSelectedAnswers = existingAnswer.selectedAnswers.filter((answer) => answer !== null);
      existingAnswer.selectedAnswers = updatedSelectedAnswers;
      setUserAnswers([...userAnswers]);
    }
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
      const response = await axios.post('/quiz', { userAnswers });
      console.log(response.data);
    } catch (error) {
      console.error(error);
    }
  };

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
                  <input
                    type="checkbox"
                    aria-label="Checkbox for following text input"
                    onChange={(e) => {
                      const selectedAnswerText = answer.answer;
                      const isCorrect = answer.is_correct;
                      handleAnswerChange(question.id, selectedAnswerText, isCorrect);
                    }}
                  />
                </div>
              </div>
              <div className="input-group-prepend">
                <span className="input-group-text">{answer.answer}</span>
              </div>
            </div>
          ))}
          {addDefaultAnswerIfNecessary(question)}
          <a name={``}>
            {!isFirstQuestion && (
              <button className="btn btn-danger" onClick={showPreviousQuestion}>
                Previous Question
              </button>
            )}
            {!isLastQuestion && (
              <button className="btn btn-success" onClick={showNextQuestion}>
                Next Question
              </button>
            )}
            {isLastQuestion && (
              <button type="submit" className="btn btn-primary" onClick={handleSubmit}>
                End Quiz
              </button>
            )}
          </a>
        </div>
      ))}
    </blockquote>
  );
}
