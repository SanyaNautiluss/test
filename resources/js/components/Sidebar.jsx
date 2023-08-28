import React from 'react';





const Sidebar = () => {
  return (
    <div       
    style={{ height:'50px', marginLeft: '-17rem', marginTop: '5rem' }}
  >
      {/* Sidebar */}
      <nav  id="sidebar" className="col-lg-2 sidebar">
      
        <div className="position-fixed " >
          <ul className="nav flex-column ">
          <h3 className="mb-0 " style={{color:'black', backgroundColor: '#E7E7E7'}}>
            W3Schools Quizzes
          </h3>
            <li className="nav-item">
              <a className="nav-link" href="#" style={{color:'black', backgroundColor: '#E7E7E7'}}>
                Home
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={{color:'black', backgroundColor: '#E7E7E7'}}>
                About
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={{color:'black', backgroundColor: '#E7E7E7'}}>
                About
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={{color:'black', backgroundColor: '#E7E7E7'}}>
                About
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={{color:'black', backgroundColor: '#E7E7E7'}}>
                About
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={{color:'black', backgroundColor: '#E7E7E7'}}>
                About
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={{color:'black', backgroundColor: '#E7E7E7'}}>
                About
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={{color:'black', backgroundColor: '#E7E7E7'}}>
                About
              </a>
            </li>
            <li className="nav-item">
              <a  className="nav-link" href="#" style={{color:'black', backgroundColor: '#E7E7E7'}}>
                About
              </a>
            </li>
          </ul>
        </div>
      </nav>

    </div>
  );
};

export default Sidebar;