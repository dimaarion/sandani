import axios from 'axios'

const api = axios.create({
    baseURL: 'http://sandani.local/api/getdb/'
    
})

export const array_obj = (arr) => {
    let new_arr = [];
    // eslint-disable-next-line
    for (const key in arr) {

        new_arr[key] = arr[key];


    }
    return new_arr;
}

export const grids = () => {
    return (dispatch) => {
        api.get('grid.php')
            .then((res) => dispatch({ type: 'GRID', payload: res }))
    }
}

export const menus = () => {
    return (dispatch) => {
        api.get('menupublic.php')
            .then((res) => dispatch({ type: 'MENU', payload: res.data }))
    }
}

export const tides = () => {
    return (dispatch) => {
        api.get('tide.php')
            .then((res) => dispatch({ type: 'TIDE', payload: res }))
    }
}

export const dopprice = (params, vibor) => {
    return (dispatch) => {
        api.get('dopprices.php')
            .then((res) => dispatch({ type: 'DOPPRICE', payload: res.data, params:params, vibor:vibor }))
            
    }
}

export const priceZnacenie = () => {
    return (dispatch) => {
        api.get('priceznacenie.php')
            .then((res) => dispatch({ type: 'PRICE', payload: res.data }))
            
    }
}
export const priceInZnacRez = (arr, profiles, okno, stvorka, width, height)=>{
    let rezd = 0;
    arr.map((x)=>
    (x.profiles === profiles && x.okno === okno && x.stvorka === stvorka && x.width === width && x.height === height)?
    rezd = x.znacenie
    :''
    )
     return {
         type:'PRICEREZULT',
         payload:rezd,
         
     }
}