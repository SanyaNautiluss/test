import React, {useMemo} from 'react';
import '../../css/Sidebar.css'

const Sidebar = () => {
 const Quiz ={
  color:'black'
 };
 const categories = useMemo(()=>window.categories, [window.categories]);

  return (
    <div       
    style={{ position:'fixed', height:'50px', marginLeft: '-1rem', marginTop: '100px', zIndex:'2' }}
    >
      <nav className="col-lg-2 sidebar">
        
        <div style={{height: '100%', width: '250px', backgroundColor: '#E7E9EB', overflowY: 'scroll', paddingTop: '20px'}} >
          <h4 className="mb-0"  >W3Schools Quizzes</h4>
          <ul id='Sidebar' className="nav flex-column" >
            <a className="nav-link" href="/" style={Quiz}>Quiz HOME</a>
            {categories.map((category, index) => (
              <li key={index} className="nav-item" >
                <a className="nav-link" href={`/${category.id}`} style={Quiz} >
                  Quiz {category.name}
                </a>
              </li>
            ))}     
          </ul>
        </div>
      </nav>
    </div>
  );
};

export default Sidebar;