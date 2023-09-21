import React from 'react';
import ReactDOM from 'react-dom/client'
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap/dist/js/bootstrap.bundle.min';
import Welcome from './layouts/Welcome.jsx';
import Quiz from './layouts/Quiz.jsx';
import Test from './layouts/Test.jsx';
import Result from './layouts/Result.jsx';
import CategorySelector from './components/CategorySelector.jsx';
import './index.css'

const welcome = document.getElementById('welcome')
const tests = document.getElementById('tests')
const quiz = document.getElementById('quiz')
const result = document.getElementById('result')

if (welcome){
  ReactDOM.createRoot(welcome).render(
    <Welcome>
        {console.log(window.user)}
        {console.log(window.categories)}

    </Welcome>,
  )
}
if (tests){
  ReactDOM.createRoot(tests).render(
    <Test>
        {console.log(window.category)}

    </Test>,
  )
}
if (quiz){
  ReactDOM.createRoot(quiz).render(
    <Quiz>
        {console.log(window.test)}
        {console.log(window.question)}
        {console.log(window.categories)}

    </Quiz>,
  )
}
if (result){
  ReactDOM.createRoot(result).render(
    <Result>
        {console.log(window.question)}
        {console.log(window.responseData)}

    </Result>,
  )
}
if (categorySelector){
  ReactDOM.createRoot(categorySelector).render(
    <CategorySelector>
        {console.log(window.categories)}
    </CategorySelector>,
  )
}