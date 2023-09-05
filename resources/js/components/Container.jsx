import React, {useMemo} from 'react';

const BoxComponent = () => {
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
      const categories = useMemo(()=>window.categories, [window.categories]);

    return (
        <div style={{width:'1300px', marginLeft:'300px'}}>     
            <div className="d-flex flex-wrap" >
                {categories.map((category, index) => (
                    <div key={index} className="box bg-primary mr-5 mb-5 p-5" style={boxStyle}>
                        <h1>{category.name}</h1>
                        <p className="mb-4 p-4">
                            25 Questions covering the basics of {category.name}
                        </p>
                        <a href={category.id}>
                            <button className="btn btn-success" style={button}>
                                Start Quiz
                            </button>
                        </a>
                    </div>
                    ))}   
            </div>
        </div>
    );
};

export default BoxComponent;