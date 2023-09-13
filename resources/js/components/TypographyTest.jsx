import React, {useMemo} from 'react';

export default function TypographyTest() {
  const category = useMemo(()=>window.category, [window.category]);

  return (
      <blockquote className="blockquote text-left" style={{marginLeft:'300px',}}>
        <p className="h1 mb-4">
          W3Schools Quizzes
        </p>
        <p className="h2 mb-4">
          {category.name} Category
        </p>
        <p className="mb-4">
          Each test contains 25-40 questions, you get 1 point for each correct answer, at the end of each quiz you get your total score.
        </p>
    </blockquote>
  );
}