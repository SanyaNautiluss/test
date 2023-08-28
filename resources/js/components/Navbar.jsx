import React from 'react';



const Navbar = () => {
  const items = ['Item 1', 'Item 2', 'Item 3', 'Item 4', 'Item 5', 'Item 6', 'Item 7', 'Item 8', 'Item 9', 'Item 10', 'Item 11', 'Item 12', 'Item 13', 'Item 14', 'Item 15', 'Item 16', 'Item 17', 'Item 18', 'Item 19', 'Item 20', 'Item 21', 'Item 22'];
  return (
    <div>
      {/* Header */}
      <div className="fixed-top">
      <nav className="navbar navbar-expand-lg navbar-light bg-light">
       
          <a className="navbar-brand" href="#">Your App</a>

          {/* Buttons on the left */}
          <div className="navbar-nav">
            <button className="btn btn-primary mr-2">Left Button 1</button>
            <button className="btn btn-secondary">Left Button 2</button>
          </div>

          {/* Buttons on the right */}
          <div className="navbar-nav ml-auto">
          <a href="/login"><button className="btn btn-success mr-2" >Log in</button></a>
          <a href="/register"><button className="btn btn-danger">Register</button></a>
          </div>

      </nav>
        

        <button type="button" className="h-25 d-inline-block btn btn-dark">
          {items.map((item, index) => (
            <li key={index} className="h-25 d-inline-block btn btn-dark">
              {item}
            </li>
          ))}
        </button>


    </div>
      </div>




  );
};

export default Navbar;