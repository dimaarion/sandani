import React from 'react';
import {Link} from "react-router-dom";
function Logo(props) {
	return (
		<div id = "logo" style = {{height:'100px', marginTop:'20px'}}>
<Link to = "/"><img src = {`/img/icon/${props.logotype.logo}`} style = {{width:'299px'}} alt = "ооо sandani Окна и двери"/></Link>
		</div>
	)
}

export default Logo;