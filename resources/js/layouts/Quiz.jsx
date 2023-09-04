import { useState } from 'react';
import Navbar from '../components/Navbar.jsx';
import Sidebar from '../components/Sidebar.jsx';
import RightAd from '../components/rightContent.jsx';
import TypesQuiz from '../components/TypographyQuiz.jsx';
import Footer from '../components/Footer.jsx';
import Kickstart from '../components/Kickstart.jsx';
import '../../css/App.css';

function Quiz() {
  const [count, setCount] = useState(0)

  return (
    <>
    <Navbar/>
      <Sidebar/>
        <RightAd/>
          <TypesQuiz/>
              <Kickstart/>
                <Footer/>
    </>
  )
}

export default Quiz