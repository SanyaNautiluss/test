import { useState } from 'react'
import Navbar from './components/Navbar.jsx'
import Sidebar from './components/Sidebar.jsx'
import RightAd from './components/rightContent.jsx'
import Types from './components/Typography.jsx'
import Footer from './components/Footer.jsx'
import BoxComponent from './components/Container.jsx'

import './App.css'

function App() {
  const [count, setCount] = useState(0)

  return (
    <>
    <Navbar/>
      <Sidebar/>
        <RightAd/>
          <Types/>
            <BoxComponent/>
              <Footer/>
    </>
  )
}

export default App
