import React from 'react';
import aws from '../assets/img_aws.png';
import colorpicker from '../assets/colorpicker.png';
import web from '../assets/img_web.png';
const RightAd = () => {
  return (
    <div       
    className="fixed-right"
    style={{ height:'100px', marginLeft: '70rem', background: '#f8f9fa' }}
  >
      <aside className="col-md-3 mb-5 col-lg-2 bg-light sidebar">
        <div className="position-sticky">
        <img src={aws} />

        </div>
      </aside>
      <aside className="col-md-3 mb-5 col-lg-2  sidebar">
        <div className="position-sticky">
          <a href="">COLOR PICKER</a>
        <img src={colorpicker} />
        
        </div>
      </aside>

      <aside className="col-md-3 col-lg-2 bg-light sidebar">
        <div className="position-sticky">
        <img src={web} />

        </div>
      </aside>
    </div>
  );
};

export default RightAd;