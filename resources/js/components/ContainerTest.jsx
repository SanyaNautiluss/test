import React, {useMemo} from 'react';

const ContainerTest = () => {
    const boxStyle = {
        width: 600,
        height: 280,
        textAlign:'center',
    };
    const button = {
        width: '200px',
        fontSize: '19px',
        borderRadius: '20px',
        paddingTop: '7px',
        paddingBottom: '7px',
    };
    const tests = useMemo(()=>window.category.tests, [window.category.tests]);
    
      return (
        <div style={{width:'1300px', marginLeft:'300px'}}>     
            <div className="d-flex flex-wrap" >
                {tests.map((test, index) => (
                    <div key={index} className="box bg-primary mr-5 mb-5 p-5" style={boxStyle}>
                        <h1>{test.name}</h1>
                        <p className="mb-4 p-4">
                        Test covering the basics of {test.name}
                        </p>
                        <a href={'/test/'+test.id}>
                            <button className="btn btn-success" style={button} >
                                Start Quiz
                            </button>
                        </a>
                    </div>
                ))}   
            </div>
        </div>
    );
};

export default ContainerTest;