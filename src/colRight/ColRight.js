import React, { useEffect } from 'react';
import IconWind from '../iconWind/IconWind';
import FormParametr from '../formParametr/FormParametr';
import { connect } from 'react-redux'
import { grids, tides, priceZnacenie } from '../redux/actions'
function ColRight(props) {
  useEffect(() => {
    props.getGrid();
    props.getTide();
    props.getPriceZnacenie();
  }, [])
  return (
    <div className="col-sm  col-right-call">
      <IconWind getStvorka={props.getStvorka} okno={props.okno} getOkno={props.getOkno} />
      <FormParametr getdopp={props.getdopp} tidePrices={props.tidePrices} windowWidth={props.windowWidth} gridColors={props.gridColors} gridWhites={props.gridWhites} getOkno={props.getOkno} okno={props.okno} getStvorka={props.getStvorka} getProfile={props.getProfile} grid={props.grid} tide={props.tide} />
    </div>
  );
}
const setPath = state => ({
  grid: state.grid,
  tide: state.tide,
  priceZnac: state.priceZnac,
  windowWidth: state.windowWidth,
  windowHeight: state.windowHeight,
  okno: state.okno,
  profile: state.profile,
  stvorka: state.stvorka,
  gridWhite: state.gridWhite,
  tidePrice: state.tidePrice
})
const toProps = dispatch => ({
  getGrid: () => dispatch(grids()),
  getTide: () => dispatch(tides()),
  getPriceZnacenie: () => dispatch(priceZnacenie()),
  getOkno: (oknoImg) => dispatch({ type: 'OKNO', payload: oknoImg }),
  getProfile: (prof) => dispatch({ type: 'PROFILE', payload: prof }),
  getStvorka: (stv) => dispatch({ type: 'STVORKA', payload: stv }),
  gridWhites: (arr, par) => dispatch({ type: 'GRIDWHITE', payload: arr, params: par }),
  tidePrices: (arr, par) => dispatch({ type: 'TIDEPRICE', payload: arr, params: par }),
})
const mapDispatchToProps = toProps
const mapStateToProps = setPath
export default connect(mapStateToProps, mapDispatchToProps)(ColRight);