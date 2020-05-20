import React from "react";
import { Link } from "react-router-dom";
import Button  from "./Button";
function Subart(props) {
    return (
        <div  className="container-fluid">
            <h2 className="text-center p-5 mt-5"><Link to={props.art_alias}>{props.art_name}</Link></h2>
            <div className="row container-fluid">
                <div className="col-sm">
                    <div className="text-center"><Link to={props.art_alias}><img style={{ borderRadius: '10px' }} width="100%" src={`/img/window/${props.art_img}`} alt={props.art_name} /></Link></div>
                </div>
                <div className="col">
                    <div className=" text-sm-left" style={{ fontSize: '16pt' }}>{props.art_subcontent}</div>
                    <Button alias={props.art_alias} />
                </div>
            </div>
        </div>
    )
}
export default Subart;