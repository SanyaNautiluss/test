import React from 'react';
import aws from '../assets/img_aws.png';
import colorpicker from '../assets/colorpicker.png';
import web from '../assets/img_web.png';
const RightAd = () => {
  return (
    <div       
    className="fixed-right"
    style={{ height:'70px', marginLeft: '75rem', marginTop: '120px', background: '#f8f9fa' }}
  >
      <aside className="col-md-3 mb-5 col-lg-2 bg-light sidebar">
        <div className="position-sticky">
        <img src={aws} />

        </div>
      </aside>
      <aside className="col-md-3 mb-5 col-lg-2  sidebar">
        <div style={{width:'150px', marginLeft:'80px'}}>
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