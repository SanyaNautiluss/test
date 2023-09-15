import React, { useMemo, useState, useEffect } from 'react';
import axios from 'axios';

export default function TypographyQuiz() {
  const test = useMemo(() => window.test, [window.test]);
  const questions = useMemo(() => window.question, [window.question]);
  const [visibleQuestionIndex, setVisibleQuestionIndex] = useState(0);
  const isFirstQuestion = visibleQuestionIndex === 0;
  const isLastQuestion = visibleQuestionIndex === questions.length - 1;
  const [elapsedTime, setElapsedTime] = useState(0);

    useEffect(() => {
      const timerInterval = setInterval(() => {
        setElapsedTime((prevElapsedTime) => prevElapsedTime + 1);
      }, 1000);
  
      // Cleanup the timer when the component unmounts
      return () => {
        clearInterval(timerInterval);
      };
    }, []);

  const showNextQuestion = () => {
    const nextIndex = (visibleQuestionIndex + 1) % questions.length;
    setVisibleQuestionIndex(nextIndex);
  };
  const showPreviousQuestion = () => {
    const previousIndex = (visibleQuestionIndex - 1 + questions.length) % questions.length;
    setVisibleQuestionIndex(previousIndex);
  };

  const [userAnswers, setUserAnswers] = useState([]);

  const handleAnswerChange = (questionId, answerId, isCorrect) => {
    const updatedUserAnswers = [...userAnswers];
    const existingAnswerIndex = updatedUserAnswers.findIndex(
      (userAnswer) => userAnswer.questionId === questionId
    );  
  
    if (existingAnswerIndex !== -1) {
      const selectedAnswers = updatedUserAnswers[existingAnswerIndex].selectedAnswers;
      const isAlreadySelected = selectedAnswers.includes(answerId);
  
      if (isAlreadySelected) {
        // If the answer is already selected, remove it
        const updatedSelectedAnswers = selectedAnswers.filter((id) => id !== answerId);
        updatedUserAnswers[existingAnswerIndex].selectedAnswers = updatedSelectedAnswers;
        updatedUserAnswers[existingAnswerIndex].isCorrect = updatedUserAnswers[existingAnswerIndex].isCorrect.filter((correct) => correct !== isCorrect);
      } else {
        // If the answer is not selected, add it
        updatedUserAnswers[existingAnswerIndex].selectedAnswers.push(answerId);
        updatedUserAnswers[existingAnswerIndex].isCorrect.push(isCorrect);
      }
    } else {
      // Create a new answer object for the question
      updatedUserAnswers.push({
        questionId,
        selectedAnswers: [answerId],
        isCorrect: isCorrect !== null ? [isCorrect] : [],
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

  // Get the test_id from the first question
  const firstQuestion = questions[0];
  const testId = firstQuestion.test_id; // Replace 'test_id' with the actual key
   
  // Calculate minutes and seconds
  const minutes = Math.floor(elapsedTime / 60);
  const seconds = elapsedTime % 60;
  
  // Format the elapsedTime as "minutes:seconds"
  const formattedElapsedTime = `${minutes}:${seconds}`;


   // Create the data to send in the POST request
   const postData = {
     testId, // Include the test_id in the data
     userAnswers,
     elapsedTime: formattedElapsedTime, // Include the formatted elapsedTime in the data
    };

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log(postData)
    axios.post('/quiz', { postData })
      .then((response) => {
        console.log(response.data);
        window.location.href=response.data.resulturl
      })
      .catch((error) => {
        console.error(error);
      });
  };

  return (
    <blockquote className="blockquote text-left" style={{ marginLeft: '300px' }}>
      <p className="h1 mb-4">Test: {test}</p>

      {questions.map((question, index) => (
        <div className="h2 mb-4" style={{display: index === visibleQuestionIndex ? 'block' : 'none'}} key={question.id}>
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
                      const selectedAnswer = answer.id;
                      const isCorrect = answer.is_correct;
                      handleAnswerChange(question.id, selectedAnswer, isCorrect);
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
          <a>
            <h5 className='pt-2' style={{marginLeft:'1160px', marginBottom:'-20px'}}>{Math.floor(elapsedTime / 60)}:{Math.floor(elapsedTime % 60)}</h5>
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
              <button type="submit" className="btn btn-primary" onClick={handleSubmit} >
                End Quiz
              </button>
            )}
          </a>

        </div>
      ))}
    </blockquote>
  );
}
