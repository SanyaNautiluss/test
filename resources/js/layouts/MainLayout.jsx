import { useState } from 'react';
import Navbar from '../components/Navbar.jsx';
import Sidebar from '../components/Sidebar.jsx';
import RightAd from '../components/rightContent.jsx';
import Footer from '../components/Footer.jsx';
import Kickstart from '../components/Kickstart.jsx';
import '../../css/App.css';

export default function MainLayout({children}) {
  const [count, setCount] = useState(0)

  return (
    <>
    <Navbar/>
      <Sidebar/>
        <RightAd/>
          {children}
            <Kickstart/>
              <Footer/>
    </>
  )
}