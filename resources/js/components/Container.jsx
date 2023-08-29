import React from 'react';

const BoxComponent = () => {
    const boxStyle = {
        width: 600,
        height: 280,
        
      };
      const button = {
        width: '200px',
        fontSize: '19px',
        borderRadius: '20px',
        paddingTop: '7px',
        paddingBottom: '7px'
      };
    return (
    <div style={{width:'1300px', marginLeft:'-70px'}}>
        <div className="d-flex flex-wrap" >
            <div className="box bg-primary mr-5 mb-5 p-5" style={boxStyle}>
                <h1>PHP</h1>
                <p className="mb-4 p-4">
                25 Questions covering the basics of PHP
                </p>
                <button className="btn btn-success" style={button} href="#">
                    Start Quiz
                </button>
            </div>
            <div className="box bg-secondary p-5" style={boxStyle}>
            <h1>CSS</h1>
                <p className="mb-4 p-4">
                25 Questions covering the basics of CSS
                </p>
                <button className="btn btn-success" style={button} href="#">
                    Start Quiz
                </button>
            </div>
            <div className="box bg-info mr-5 mb-5 p-5" style={boxStyle}>
            <h1>HTML</h1>
                <p className="mb-4 p-4">
                25 Questions covering the basics of HTML
                </p>
                <button className="btn btn-success" style={button} href="#">
                    Start Quiz
                </button>
            </div>
            <div className="box bg-danger  p-5" style={boxStyle}>
            <h1>React</h1>
                <p className="mb-4 p-4">
                25 Questions covering the basics of React
                </p>
                <button className="btn btn-success" style={button} href="#">
                    Start Quiz
                </button>
            </div>
            <div className="box bg-warning mr-5 mb-5 p-5" style={boxStyle}>
            <h1>Node</h1>
                <p className="mb-4 p-4">
                25 Questions covering the basics of Node
                </p>
                <button className="btn btn-success" style={button} href="#">
                    Start Quiz
                </button>
            </div>
            <div className="box bg-primary p-5" style={boxStyle}>
            <h1>Vue</h1>
                <p className="mb-4 p-4">
                25 Questions covering the basics of Vue
                </p>
                <button className="btn btn-success" style={button} href="#">
                    Start Quiz
                </button>
            </div>
        </div>
    </div>
  );
};

export default BoxComponent;