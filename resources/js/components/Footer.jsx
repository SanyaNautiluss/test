import React from 'react';
import viteLogo from '../assets/vite.svg';
const Footer = () => {
  return (
    <footer >
      <div className="container" align='center'  >

        <button type="button" className="btn btn-dark mx-2">Spaces</button>
        <button type="button" className="btn btn-dark mx-2">Upgrade</button>
        <button type="button" className="btn btn-dark mx-2">Newsletter</button>
        <button type="button" className="btn btn-dark mx-2">Get Certified</button>
        <button type="button" className="btn btn-dark mx-2">Report Error</button>              
         
        <div className="container" >
          <div className="row">
            <div className="col-sm">
              <h4 >Top Tutorials</h4>
              <a href='#!' className='text-dark'>
                Link 1
              </a>
              <br/>
              <a href='#!' className='text-dark'>
                Link 2
              </a>
              <br/>
              <a href='#!' className='text-dark'>
                Link 3
              </a>
              <br/>
              <a href='#!' className='text-dark'>
                Link 4
              </a>
            </div>

            <div className="col-sm">
              <h4 >Top References</h4>
              <a href='#!' className='text-dark'>
                Link 1
              </a>
              <br/>
              <a href='#!' className='text-dark'>
                Link 2
              </a>
              <br/>
              <a href='#!' className='text-dark'>
                Link 3
              </a>
              <br/>
              <a href='#!' className='text-dark'>
                Link 4
              </a>
            </div>
                  
            <div className="col-sm">
              <h4 >Top Examples</h4>
              <a href='#!' className='text-dark'>
                Link 1
              </a>
              <br/>
              <a href='#!' className='text-dark'>
                Link 2
              </a>
              <br/>
              <a href='#!' className='text-dark'>
                Link 3
              </a>
              <br/>
              <a href='#!' className='text-dark'>
                Link 4
              </a>
            </div>

            <div className="col-sm">
              <h4 >Get Certified</h4>
              <a href='#!' className='text-dark'>
                Link 1
              </a>
              <br/>
              <a href='#!' className='text-dark'>
                Link 2
              </a>
              <br/>
              <a href='#!' className='text-dark'>
                Link 3
              </a>
              <br/>
              <a href='#!' className='text-dark'>
                Link 4
              </a>
            </div>
          </div>
        </div>
      </div>
        
        <section className='mb-4' >
          <div align="right" >
          <a href='#!' className='text-dark'>
            Forum
          </a>
          |
          <a href='#!' className='text-dark'>
            About
          </a>
          </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum repellat quaerat
              voluptatibus placeat nam, commodi optio pariatur est quia magnam eum harum corrupti dicta, aliquam
              sequi voluptate quas.
            </p>
        </section>

        <div className='text-center p-3' >
            © 2020 Copyright:
          <a className='text-dark' href='https://mdbootstrap.com/'>
            MDBootstrap.com
          </a>
        </div>

        <div>
          <a href="https://vitejs.dev" target="_blank">
            <img src={viteLogo} className="logo" alt="Vite logo" />
          </a>
        </div>

    </footer>
  );
};

export default Footer;