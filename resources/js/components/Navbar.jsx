import React, {useMemo} from 'react';
import reactLogo from '../assets/react.svg';
import miniLogo from '../assets/mini.svg';
import mini2Logo from '../assets/minireact.svg';
import '../../css/Navbar.css'


const Navbar = () => {
  const divstyle = {
    width:'1900px',
    textAlign:'start',
    height: '40px',
    marginLeft: '-1rem',
    overflow: 'hidden',
  };
  const white ={
    color:'white'
   };
  const categories = useMemo(()=>window.categories.data, [window.categories]);
  
  return (
    <div>
      <div className="fixed-top">
        <nav className="navbar navbar-expand-lg navbar-light bg-light">
          <div>
            <a href="" target="_blank">
              <img src={reactLogo} className="mr-4" />
            </a>
          </div>

          <div id='Dropdown' className="navbar-nav">
            <div  className="dropdown">
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

          <div className="navbar-nav ml-auto">
            <a id='button' href=""><button className="btn  mr-2" ><img src={miniLogo} /> Bootcamps</button></a>
            <a id='button' href=""><button className="btn  mr-2"><img src={mini2Logo}/> Spaces</button></a>
            <a href="/login"><button className="btn btn-success rounded-pill" style={{width:'100px', marginRight:'-30px', position:'relative'}} >Log in</button></a>
            <a id='Navbar' href="/register"><button  className="btn pl-4"  style={{width:'100px', textAlign:'right'}}>Register</button></a>
          </div>
        </nav>
        
        <ul className="btn-dark" style={divstyle}>
          <i className="arrow left"></i>
            {categories.map((category, index) => (
              <li key={index} className="btn btn-dark" style={{marginTop:'-5px'}} >
                <a className="nav-link" href={category.name} style={white}>
                  {category.name}
                </a>
              </li>
            ))}     
          <i className="arrow right"></i>
        </ul>
      </div>
    </div>
  );
};

export default Navbar;