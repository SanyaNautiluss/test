import React from 'react';
import '../../css/Sidebar.css'




const Sidebar = () => {
 const Quiz ={
  color:'black'
 };
  return (
    <div       
    style={{ position:'fixed', height:'50px', marginLeft: '-23rem', marginTop: '70px' }}
  >
      {/* Sidebar */}
      <nav className="col-lg-2 sidebar">
      
        <div style={{height: '820px', width: '250px', backgroundColor: '#E7E9EB', overflowY: 'scroll', paddingTop: '20px'}} >
        <h4 className="mb-0"  >
            W3Schools Quizzes
          </h4>
          <ul id='Sidebar' className="nav flex-column ">

            <li className="nav-item">
              <a className="nav-link" href="#" style={Quiz}>
                Quiz HOME
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz PHP
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz CSS
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz HTML
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz React
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz Node
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz Vue
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={Quiz}>
                Quiz
              </a>
            </li>
          </ul>
        </div>
      </nav>

    </div>
  );
};

export default Sidebar;