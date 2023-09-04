import React from 'react';
import ReactDOM from 'react-dom';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap/dist/js/bootstrap.bundle.min';
import Quiz from './layouts/Quiz.jsx';
import './index.css';

ReactDOM.createRoot(document.getElementById('quiz')).render(
  <Quiz>
      {console.log(window.categories)}
  </Quiz>,
)