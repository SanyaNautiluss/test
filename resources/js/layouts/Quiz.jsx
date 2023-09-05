import { useState } from 'react';
import '../../css/App.css';
import TypographyQuiz from '../components/TypographyQuiz.jsx';
import MainLayout from './MainLayout';

function Quiz() {
  const [count, setCount] = useState(0)

  return (
    <MainLayout>
      <TypographyQuiz/>
    </MainLayout>
  )
}

export default Quiz