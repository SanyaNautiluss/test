import { useState } from 'react'
import Navbar from '../components/Navbar.jsx'
import Sidebar from '../components/Sidebar.jsx'
import RightAd from '../components/rightContent.jsx'
import Types from '../components/Typography.jsx'
import Footer from '../components/Footer.jsx'
import BoxComponent from '../components/Container.jsx'
import Kickstart from '../components/Kickstart.jsx'

import '../../css/App.css'

function Welcome() {
  const [count, setCount] = useState(0)

  return (
    <>
    <Navbar/>
      <Sidebar/>
        <RightAd/>
          <Types/>
            <BoxComponent/>
              <Kickstart/>
                <Footer/>
    </>
  )
}

export default Welcome