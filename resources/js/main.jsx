import React from 'react';
import ReactDOM from 'react-dom/client'
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap/dist/js/bootstrap.bundle.min';
import Welcome from './layouts/Welcome.jsx';
import './index.css'

ReactDOM.createRoot(document.getElementById('welcome')).render(
  <Welcome>
      {console.log(window.categories)}
  </Welcome>,
)

