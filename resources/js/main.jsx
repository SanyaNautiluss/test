import React from 'react';
import ReactDOM from 'react-dom/client'
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap/dist/js/bootstrap.bundle.min';
import Welcome from './layouts/Welcome.jsx';
import Quiz from './layouts/Quiz.jsx';
import './index.css'

const welcome = document.getElementById('welcome')
const quiz = document.getElementById('quiz')

if (welcome){
  ReactDOM.createRoot(welcome).render(
    <Welcome>
        {console.log(window.categories)}
    </Welcome>,
  )
}
if (quiz){
  ReactDOM.createRoot(quiz).render(
    <Quiz>
        {console.log(window.categories)}
    </Quiz>,
  )
}
