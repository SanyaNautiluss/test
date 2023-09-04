import React, {useMemo} from 'react';


export default function TypesQuiz() {
  const categories = useMemo(()=>window.categories.data, [window.categories]);


       
  return (
        <blockquote className="blockquote text-left" style={{marginLeft:'300px',}}>
               {categories.map((category, index) => (
              <li key={index} className="nav-item" >
                  Quiz {category.name}
              </li>  
              ))} 

        <p className="mb-4">
          Question {} of {};
        </p>
        <p className="h2 mb-4">
          The Quiz
        </p>
    </blockquote>
  );
}


