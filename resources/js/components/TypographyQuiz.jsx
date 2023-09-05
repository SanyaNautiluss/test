import React, {useMemo} from 'react';




export default function TypesQuiz() {
  const category = useMemo(()=>window.category, [window.category]);


       
  return (
    <div>
        <blockquote className="blockquote text-left" style={{marginLeft:'300px',}}>

        <p className="h1 mb-4">
        {category.name}  Quiz 
        </p>

        <p className="mb-4">
          Question {} of {};
        </p>
        <p className="h2 mb-4">
          The Quiz
        </p>
    </blockquote>
    </div>
  );
}


