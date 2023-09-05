import { useState } from 'react';
import Types from '../components/Typography.jsx';
import BoxComponent from '../components/Container.jsx';
import MainLayout from './MainLayout';
import '../../css/App.css';

function Welcome() {
  const [count, setCount] = useState(0)

  return (
    <>
    <MainLayout>
      <Types/>
        <BoxComponent/>
    </MainLayout>
    </>
  )
}

export default Welcome