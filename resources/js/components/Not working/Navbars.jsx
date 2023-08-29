import React from 'react';
import './Navbar.css';
import './Navbars.js';
import './Navbar.js';


const Navbars = () => {



    return (
<div className="topnav notranslate" id='topnav' style={{position:'fixed!important', top:'56px'}}>
  <div style={{overflow:'auto'}}>
    <div className="w3-bar w3-left topnavbar" style={{width:'100%',overflow:'hidden',height:'32px'}}>

      <a href='javascript:void(0);' className='topnav-icons fa fa-menu w3-hide-large w3-left w3-bar-item w3-button ga-nav' style={{lineHeight:'1.1', paddingTop:'8px!important', paddingBottom:'7px!important'}} onClick='open_menu()' title='Menu'></a>

      <a href='/default.asp' style={{display:'none'}} className='topnav-icons fa fa-home w3-left w3-bar-item w3-button ga-nav' title='Home'></a>
      <a className="w3-bar-item w3-button ga-nav" href='/html/default.asp' title='HTML Tutorial' style={{paddingLeft:'18px!important', paddingRight:'18px!important'}}>HTML</a>
      <a className="w3-bar-item w3-button ga-nav" href='/css/default.asp' title='CSS Tutorial'>CSS</a>
      <a className="w3-bar-item w3-button ga-nav" href='/js/default.asp' title='JavaScript Tutorial'>JAVASCRIPT</a>
      <a className="w3-bar-item w3-button ga-nav" href='/sql/default.asp' title='SQL Tutorial'>SQL</a>
      <a className="w3-bar-item w3-button ga-nav" href='/python/default.asp' title='Python Tutorial'>PYTHON</a>
      <a className="w3-bar-item w3-button ga-nav" href='/java/default.asp' title='Java Tutorial'>JAVA</a>
      <a className="w3-bar-item w3-button ga-nav" href='/php/default.asp' title='PHP Tutorial'>PHP</a>
      <a className="w3-bar-item w3-button ga-nav" href='/bootstrap/bootstrap_ver.asp' title='Bootstrap Tutorial'>BOOTSTRAP</a>
      <a className="w3-bar-item w3-button ga-nav" href='/howto/default.asp' title='How To'>HOW TO</a>
      <a className="w3-bar-item w3-button ga-nav" href='/w3css/default.asp' title='W3.CSS Tutorial'>W3.CSS</a>
      <a className="w3-bar-item w3-button ga-nav" href='/c/index.php' title='C Tutorial'>C</a>
      <a className="w3-bar-item w3-button ga-nav" href='/cpp/default.asp' title='C++ Tutorial'>C++</a>
      <a className="w3-bar-item w3-button ga-nav" href='/cs/index.php' title='C# Tutorial'>C#</a>
      <a className="w3-bar-item w3-button ga-nav" href='/react/default.asp' title='React Tutorial'>REACT</a>
      <a className="w3-bar-item w3-button ga-nav" href='/r/default.asp' title='R Tutorial'>R</a>
      <a className="w3-bar-item w3-button ga-nav" href='/jquery/default.asp' title='jQuery Tutorial'>JQUERY</a>
      <a className="w3-bar-item w3-button ga-nav" href='/django/index.php' title='Django Tutorial'>DJANGO</a>
      <a className="w3-bar-item w3-button ga-nav" href='/typescript/index.php' title='Typescript Tutorial'>TYPESCRIPT</a>
      <a className="w3-bar-item w3-button ga-nav" href='/nodejs/default.asp' title='NodeJS Tutorial'>NODEJS</a>
      <a className="w3-bar-item w3-button ga-nav" href='/mysql/default.asp' title='MySQL Tutorial'>MYSQL</a>
      <a href='javascript:void(0);' className='topnav-icons fa w3-right w3-bar-item w3-button ga-nav' style={{lineHeight:'1.1', paddingTop:'7px!important', paddingBottom:'7px!important'}} onClick='gSearch(this)' title='Search W3Schools'>&#xe802;</a>
      <a href='javascript:void(0);' className='topnav-icons fa w3-right w3-bar-item w3-button ga-nav' style={{lineHeight:'1.1', paddingTop:'7px!important', paddingBottom:'7px!important'}} onClick='gTra(this)' title='Translate W3Schools'>&#xe801;</a>
      <a href='javascript:void(0);' className='topnav-icons fa w3-right w3-bar-item w3-button ga-nav' style={{lineHeight:'1.1', paddingTop:'7px!important', paddingBottom:'7px!important'}} onMouseOver="mouseoverdarkicon()" onMouseOut="mouseoutofdarkicon()" onClick='changepagetheme(2)'>&#xe80b;</a>
    </div>

    <div style={{display:'none', position:'absolute', zIndex:'4', right:'52px', height:'30px', top:'-4px', backgroundColor:'#282A35', letterSpacing:'normal'}} id='googleSearch'>
      <div className='gcse-search'></div>
    </div>
    <div style={{display:'none', position:'absolute', zIndex:'3', right:'111px', paddingTop:'3px', height:'32px', txop:'-3px', backgroundColor:'#282A35', textAlign:'right'}} id='google_translate_element'></div>


    <div id="darkmodemenu" className="ws-black" onMouseOver="mouseoverdarkicon()" onMouseOut="mouseoutofdarkicon()">
      <input id="radio_darkpage" type="checkbox" name="radio_theme_mode" onClick="click_darkpage()"/><label htmlFor="radio_darkpage"> Dark mode</label>
      <br/>
      <input id="radio_darkcode" type="checkbox" name="radio_theme_mode" onClick="click_darkcode()"/><label htmlFor="radio_darkcode"> Dark code</label>
    </div>
  </div>
</div>




);
};

export default Navbars;