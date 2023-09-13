import { useState } from 'react';
import '../../css/App.css';
import TypographyResult from '../components/TypographyResult.jsx';
import MainLayout from './MainLayout';

function Result() {
  const [count, setCount] = useState(0)

  return (
    <MainLayout>
      <TypographyResult/>
    </MainLayout>
  )
}

export default Result