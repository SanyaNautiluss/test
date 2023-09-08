import { useState } from 'react';
import TypographyTest from '../components/TypographyTest.jsx';
import ContainerTest from '../components/ContainerTest.jsx';
import MainLayout from './MainLayout.jsx';
import '../../css/App.css';

function Welcome() {
  const [count, setCount] = useState(0)

  return (
    <>
    <MainLayout>
      <TypographyTest/>
        <ContainerTest/>
    </MainLayout>
    </>
  )
}

export default Welcome