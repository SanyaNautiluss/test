import React, {useMemo, useEffect, useRef, useState} from 'react';
import reactLogo from '../assets/react.svg';
import miniLogo from '../assets/mini.svg';
import mini2Logo from '../assets/minireact.svg';
import '../../css/Navbar.css'


const Navbar = () => {
  const divstyle = {
    scrollBehavior: 'smooth',
    display:'flex',
    width:'1930px',
    textAlign:'start',
    height: '40px',
    marginLeft: '-3rem',
    overflow: 'hidden',
  };
  const white ={
    color:'white',
    display: 'flex',
   };


   const Testitems = ['Item 1', 'Item 2', 'Item 3', 'Item 4', 'Item 5', 'Item 6', 'Item 7', 'Item 8', 'Item 9', 'Item 10', 'Item 11', 'Item 12', 'Item 13', 'Item 14', 'Item 15', 'Item 16', 'Item 17', 'Item 18', 'Item 19', 'Item 20', 'Item 21', 'Item 22'];

  const scrl = useRef(null);
  const categories = useMemo(()=>window.categories.data, [window.categories]);
  const [scrollX, setscrollX] = useState(0); // For detecting start scroll postion
  const [scrolEnd, setscrolEnd] = useState(false); // For detecting end of scrolling
  const slide = (shift) => {
    scrl.current.scrollLeft += shift;
    setscrollX(scrollX + shift); // Updates the latest scrolled postion

    if (
        Math.floor(scrl.current.scrollWidth - scrl.current.scrollLeft) <=
        scrl.current.offsetWidth
      ) {
        setscrolEnd(true);
      } else {
        setscrolEnd(false);
      }
    };
    const scrollCheck = () => {
        setscrollX(scrl.current.scrollLeft);
        if (
          Math.floor(scrl.current.scrollWidth - scrl.current.scrollLeft) <=
          scrl.current.offsetWidth
        ) {
          setscrolEnd(true);
        } else {
          setscrolEnd(false);
        }
      };
      useEffect(() => {
        if (
          scrl.current &&
          scrl?.current?.scrollWidth === scrl?.current?.offsetWidth
        ) {
          setscrolEnd(true);
        } else {
          setscrolEnd(false);
        }
        return () => {};
      }, [scrl?.current?.scrollWidth, scrl?.current?.offsetWidth]);




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
        
        <div style={white}>
          {scrollX !== 0 && (
            <button className="btn-dark" style={{ height:'40px',  zIndex: 5}} onClick={() => slide(-200)}>
              <div className='arrow left'></div>
            </button>
          )}
          <ul ref={scrl} onScroll={scrollCheck} className="btn-dark" style={divstyle} >
              {Testitems.map((category, index) => (
                <li key={index} className="btn btn-dark" style={{marginTop:'-5px'}} >
                  <a className="nav-link text-nowrap" style={white}>
                    {category}
                  </a>
                </li>
              ))}     
          </ul>
          {!scrolEnd && (
            <button className="btn-dark" style={{ height:'40px', marginLeft:'-2rem',}} onClick={() => slide(+200)}>
              <div className='arrow right'></div>
            </button>
          )}
        </div>
      </div>
    </div>
  );
};

export default Navbar;