import { useState } from 'react';
import Typography from '../components/Typography.jsx';
import Container from '../components/Container.jsx';
import MainLayout from './MainLayout';
import '../../css/App.css';

function Welcome() {
  const [count, setCount] = useState(0)

  return (
    <>
    <MainLayout>
      <Typography/>
        <Container/>
    </MainLayout>
    </>
  )
}

export default Welcome