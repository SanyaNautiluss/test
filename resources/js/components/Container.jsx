import React from 'react';

const BoxComponent = () => {
    const boxStyle = {
        width: 530,
        height: 280,
      };
    return (
    <div className="container-left">
        <div className="d-flex flex-wrap" >
            <div className="box bg-primary mr-5 mb-5 p-5" style={boxStyle}>
                <h1>PHP</h1>
                <p className="mb-0 p-4">
                25 Questions covering the basics of PHP
                </p>
                <button type="button" className="btn btn-success" href="#">
                    Start Quiz
                </button>
            </div>
            <div className="box bg-secondary p-5" style={boxStyle}>
            <h1>CSS</h1>
                <p className="mb-0 p-4">
                25 Questions covering the basics of CSS
                </p>
                <button type="button" className="btn btn-success" href="#">
                    Start Quiz
                </button>
            </div>
            <div className="box bg-info mr-5 mb-5 p-5" style={boxStyle}>
            <h1>HTML</h1>
                <p className="mb-0 p-4">
                25 Questions covering the basics of HTML
                </p>
                <button type="button" className="btn btn-success" href="#">
                    Start Quiz
                </button>
            </div>
            <div className="box bg-danger  p-5" style={boxStyle}>
            <h1>React</h1>
                <p className="mb-0 p-4">
                25 Questions covering the basics of React
                </p>
                <button type="button" className="btn btn-success" href="#">
                    Start Quiz
                </button>
            </div>
            <div className="box bg-warning mr-5 mb-5 p-5" style={boxStyle}>
            <h1>Node</h1>
                <p className="mb-0 p-4">
                25 Questions covering the basics of Node
                </p>
                <button type="button" className="btn btn-success" href="#">
                    Start Quiz
                </button>
            </div>
            <div className="box bg-primary p-5" style={boxStyle}>
            <h1>Vue</h1>
                <p className="mb-0 p-4">
                25 Questions covering the basics of Vue
                </p>
                <button type="button" className="btn btn-success" href="#">
                    Start Quiz
                </button>
            </div>
        </div>
    </div>
  );
};

export default BoxComponent;