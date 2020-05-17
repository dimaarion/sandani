import React from "react";
import { Link } from "react-router-dom";
function Button(props) {
    return (
        <div>
            <div className="boot col-3 text-center p-0 mt-3 "><div className="bootbg"></div><Link  to = {props.alias} >Подробнее...</Link></div>
        </div>
    )
}
export default Button;