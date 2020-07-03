import React from 'react';
import WindCenter from '../windCenter/WindCenter';
import WindCenterList from '../windCenter/winCenterList';
import {connect} from 'react-redux';
function Colleft(props) {
let gridrezultcolor, tiderezultcolor;

 const callparams = (print) =>{
  switch (print) {
    case 'white':
     return 'Белый'
     
    case 'color':
      return 'Цветной' 
      
    default:
      return 'Нет'
      
  } 
 }

gridrezultcolor = callparams(props.gridWhite.titl)
tiderezultcolor = callparams(props.tidePrice.titl)




    return (
      <div className="col-sm  col-left-call">
      <WindCenter stvorka = {props.stvorka} okno = {props.okno} windowWidth = {props.windowWidth} windowHeight = {props.windowHeight} windowWidths = {props.windowWidths} windowHeights = {props.windowHeights}/>
      <WindCenterList dopp = {props.dopp} tiderezultcolor = {tiderezultcolor} gridrezultcolor = {gridrezultcolor} stvorka = {props.stvorka} profile = {props.profile} okno = {props.okno} windowWidth = {props.windowWidth} windowHeight = {props.windowHeight}/>
      </div>
    );
  }
  
  const setPath = state => ({
    windowWidth:state.windowWidth,
    windowHeight:state.windowHeight,
    okno:state.okno,
    profile: state.profile,
    stvorka: state.stvorka,
    priceZnac:state.priceZnac,
    gridWhite:state.gridWhite,
    gridColor:state.gridColor,
    grid:state.grid,
    tidePrice:state.tidePrice,
    dopp:state.dopp
    
  })
  
  const toProps = dispatch => ({
    windowWidths:(width)=>dispatch({type:'WIDTH',payload:width}),
    windowHeights:(height)=>dispatch({type:'HEIGHT',payload:height}),
    
  })
  const mapDispatchToProps = toProps
  const mapStateToProps = setPath
  
  export default connect(mapStateToProps, mapDispatchToProps)(Colleft);