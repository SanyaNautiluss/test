import React, {useMemo} from 'react';
import viteLogo from '../assets/vite.svg';
import '../../css/Footer.css';

const Footer = () => {
  const button ={
    width:'300px',
  };
  const categories = useMemo(()=>window.categories, [window.categories]);

  return (
    <footer style={{width:'1600px', marginLeft:'300px', paddingTop:'100px'}}>
      <div>
        <div id='Footer'>
          <button style={button} className="btn btn-dark mx-2">Spaces</button>
          <button style={button} className="btn btn-dark mx-2">Upgrade</button>
          <button style={button} className="btn btn-dark mx-2">Newsletter</button>
          <button style={button} className="btn btn-dark mx-2">Get Certified</button>
          <button style={button} className="btn btn-dark mx-2">Report Error</button>              
        </div>

        <div className=" pt-4" >
          <div className="row" style={{marginTop:'40px', marginBottom:'40px',}}>
            <div className="col-sm">
              <h4 >Top Tutorials</h4>
              {categories.map((category, index) => (
                <div id='link'>
                   <a key={index} href={category.id} className='text-dark' id='link'>
                    {category.name} Tutorial
                   </a>
                </div> 
              ))} 
            </div>

            <div className="col-sm">
              <h4 >Top References</h4>
              {categories.map((category, index) => (
                <div id='link'>
                   <a key={index} href={category.id} className='text-dark' id='link'>
                    {category.name} Reference
                   </a>
                </div> 
              ))} 
            </div>
                  
            <div className="col-sm">
              <h4 >Top Examples</h4>
              {categories.map((category, index) => (
                <div id='link'>
                   <a key={index} href={category.id} className='text-dark' id='link'>
                    {category.name} Examples
                   </a>
                </div> 
              ))} 
            </div>

            <div className="col-sm">
              <h4 >Get Certified</h4>
              {categories.map((category, index) => (
                <div id='link'>
                  <a key={index} href={category.id} className='text-dark' id='link'>
                    {category.name} Certificate
                  </a>
                </div> 
              ))} 
            </div>
          </div>
        </div>
      </div>
        
      <section className='mb-2' >
        <div align="right" id='link' >
          <a href='#!' className='text-dark mr-1'>
            FORUM
          </a>
          |
          <a href='#!' className='text-dark ml-1'>
            ABOUT
          </a>
        </div>
          <p className='mt-2'>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum repellat quaerat
            voluptatibus placeat nam, commodi optio pariatur est quia magnam eum harum corrupti dicta, aliquam
            sequi voluptate quas.
          </p>
      </section>

      <div id='link' className='text-center p-3' >
        <a className='text-dark' href="">© 2020 Copyright:</a>
        <a className='text-dark' id='link' href='https://mdbootstrap.com/'>
          MDBootstrap.com
        </a>
      </div>

      <div className='text-center'>
        <a href="https://vitejs.dev" target="_blank">
          <img src={viteLogo} className="logo" alt="Vite logo" />
        </a>
      </div>
    </footer>
  );
};

export default Footer;