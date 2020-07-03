import React, { useEffect } from 'react';
import Colleft from './colLeft/Colleft';
import ColRight from './colRight/ColRight';
import Rezult from './rezult/Rezult';
import { connect } from 'react-redux';
import { priceInZnacRez, dopprice, menus, array_obj } from './redux/actions'
import Menu from './components/Menu';
function Calculator(props) {
    useEffect(() => {
        props.priceRezults(props.priceZnac, props.profile.rez, props.okno.rez, props.stvorka.rez, props.windowWidth.rez, props.windowHeight.rez)
    }, [props.priceZnac, props.profile.rez, props.okno.rez, props.stvorka.rez, props.windowWidth.rez, props.windowHeight.rez])

    useEffect(() => {
        props.gridInWidths(props.gridWhite.rez, props.windowWidth.rez)
    }, [props.gridWhite.rez, props.windowWidth.rez])

    useEffect(() => {
        props.tideInPrices(props.tidePrice.rez, props.windowWidth.rez)
    }, [props.tidePrice.rez, props.windowWidth.rez])

    useEffect(() => {
        props.getmenu()
    }, [])
    return (
        <div className="App container-fluid">
            <div className="container">
                <h1 className="text-center">Калькулятор онлайн</h1>
                <div className="row row-left-call">

                    <Colleft />
                    <ColRight getdopp={props.getdopp} />

                </div>

                <Rezult dopp={props.dopp} tideInPrice={props.tideInPrice} tidePrice={props.tidePrice} priceRezult={props.priceRezult} gridInWidth={props.gridInWidth} />

            </div>
        </div>
    );
}

const setPath = state => ({
    priceZnac: state.priceZnac,
    gridWhite: state.gridWhite,
    windowWidth: state.windowWidth,
    windowHeight: state.windowHeight,
    okno: state.okno,
    profile: state.profile,
    stvorka: state.stvorka,
    priceRezult: state.priceRezult,
    gridInWidth: state.gridInWidth,
    tidePrice: state.tidePrice,
    tideInPrice: state.tideInPrice,
    dopp: state.dopp,
    menu: state.menu


})

const toProps = dispatch => ({
    priceRezults: (arr, profiles, okno, stvorka, width, height) => dispatch(priceInZnacRez(arr, profiles, okno, stvorka, width, height)),
    gridInWidths: (grid, wid) => dispatch({ type: 'GRIDINWIDTH', payload: grid, params: wid }),
    tideInPrices: (grid, wid) => dispatch({ type: 'TIDEINPRICE', payload: grid, params: wid }),
    getdopp: (yes, vibor) => dispatch(dopprice(yes, vibor)),
    getmenu: () => dispatch(menus())
})
const mapDispatchToProps = toProps
const mapStateToProps = setPath

export default connect(mapStateToProps, mapDispatchToProps)(Calculator);
