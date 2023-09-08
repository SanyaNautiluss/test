import React, {useMemo, useState} from 'react';

export default function TypographyQuiz() {
  const [visibleQuestionIndex, setVisibleQuestionIndex] = useState(0);

  const showNextQuestion = () => {
    const nextIndex = (visibleQuestionIndex + 1) % questions.length;
    setVisibleQuestionIndex(nextIndex);
  };
  const showPreviousQuestion = () => {
    const previousIndex = (visibleQuestionIndex - 1 + questions.length) % questions.length;
    setVisibleQuestionIndex(previousIndex);
  };

  const test = useMemo(()=>window.test, [window.test]);
  const questions = useMemo(()=>window.question, [window.question]);

  const isFirstQuestion = visibleQuestionIndex === 0;
  const isLastQuestion = visibleQuestionIndex === questions.length - 1;

  return (
      <blockquote className="blockquote text-left" style={{marginLeft:'300px',}}>
        <p className="h1 mb-4">
        Test: {test} 
        </p>
        
       
       {questions.map((question, index) => (
          <div className="h2 mb-4" style={{display: index === visibleQuestionIndex ? 'block' : 'none'}}>
           
              <div>
                <p className="mb-4">
                  Question {index + 1} of {questions.length};
                </p>
                <p key={index} className="mb-4 ">
                  
                  {question.question_text}
                </p>
              </div> 
              
             {question.answers.map((answer, answerIndex) => ( 
                <div  className="input-group mb-1" style={{width: '1200px', backgroundColor: '#E7E9EB'}}>
             
                  <div  className="input-group-prepend">
                    <div className="input-group-text">
                      <input name={`question[${question.id}]`} type="checkbox" aria-label="Checkbox for following text input"/>
                    </div>
                  </div>
                    <div  className="input-group-prepend">
                    <span key={answerIndex} className="input-group-text" >{answer.answer}</span>
                  </div>              
                </div>   
              ))}

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
                  <button type="submit" className="btn btn-primary">
                    End Quiz
                  </button>
                )}
              </a>
             
          </div>
        ))} 

      </blockquote>
  );
}


