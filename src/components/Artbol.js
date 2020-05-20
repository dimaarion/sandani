import React from "react";
import '../css/home.css';
import { Link } from "react-router-dom";
function Artbol(props) {
    return (
        <div key={props.art_id} className="col-sm pt-5">
            <h3 className="h3 pb-2 text-center">{props.art_name}</h3>
            <div className="text-center imagearts"><Link to={props.art_alias}><img src={`/img/window/${props.art_img}`} alt={props.art_name} /></Link></div>
        </div>
    )
}
export default Artbol;