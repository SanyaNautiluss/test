import React from 'react';
import reactLogo from '../assets/react.svg';
import miniLogo from '../assets/mini.svg';
import mini2Logo from '../assets/minireact.svg';
const Navbar = () => {
  const items = ['Item 1', 'Item 2', 'Item 3', 'Item 4', 'Item 5', 'Item 6', 'Item 7', 'Item 8', 'Item 9', 'Item 10', 'Item 11', 'Item 12', 'Item 13', 'Item 14', 'Item 15', 'Item 16', 'Item 17', 'Item 18', 'Item 19', 'Item 20', 'Item 21', 'Item 22', 'Item 23', 'Item 24', 'Item 25', 'Item 26', 'Item 27', 'Item 28', 'Item 29', 'Item 30', 'Item 31', 'Item 32', 'Item 33', 'Item 34', 'Item 35', 'Item 36', 'Item 37', 'Item 38', 'Item 39', 'Item 40'];
  const divstyle = {
    width: '1940px',
    height: '50px',
    marginLeft: '-1rem',
    overflow: 'hidden',
  };
  
  return (
    <div>
      {/* Header */}
      <div className="fixed-top">
      <nav className="navbar navbar-expand-lg navbar-light bg-light">
       
      <div>
          <a href="https://vitejs.dev" target="_blank">
            <img src={reactLogo} className="mr-4" />
          </a>
        </div>

          {/* Buttons on the left */}
          <div className="navbar-nav">
 
          <div className="dropdown">
            <button className="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tutorials
            </button>
            <div className="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a className="dropdown-item" href="#">Action</a>
              <a className="dropdown-item" href="#">Another action</a>
              <a className="dropdown-item" href="#">Something else here</a>
            </div>
          </div>

          <div className="dropdown">
            <button className="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Exercises
            </button>
            <div className="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a className="dropdown-item" href="#">Action</a>
              <a className="dropdown-item" href="#">Another action</a>
              <a className="dropdown-item" href="#">Something else here</a>
            </div>
          </div>

          <div className="dropdown">
            <button className="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Get Certified
            </button>
            <div className="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a className="dropdown-item" href="#">Action</a>
              <a className="dropdown-item" href="#">Another action</a>
              <a className="dropdown-item" href="#">Something else here</a>
            </div>
          </div>

          <div className="dropdown">
            <button className=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </button>
            <div className="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a className="dropdown-item" href="#">Action</a>
              <a className="dropdown-item" href="#">Another action</a>
              <a className="dropdown-item" href="#">Something else here</a>
            </div>
          </div>

        </div>

          {/* Buttons on the right */}
          <div className="navbar-nav ml-auto">
          
          <a href=""><button className="btn  mr-2" ><img src={miniLogo} /> Bootcamps</button></a>

          <a href=""><button className="btn  mr-2"><img src={mini2Logo}/> Spaces</button></a>

          <a href="/login"><button className="btn btn-success mr-2" >Log in</button></a>
          <a href="/register"><button className="btn btn-danger">Register</button></a>
          </div>

      </nav>
        

        <button type="button" className="btn btn-dark" style={divstyle} >
          {items.map((item, index) => (
            <li key={index} className="btn btn-dark" >
              {item}
            </li>
          ))}
        </button>


    </div>
      </div>




  );
};

export default Navbar;