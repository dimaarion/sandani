import { combineReducers } from 'redux'

const grid = (state = [{}], action) => {
    switch (action.type) {
        case 'GRID':
            return state = action.payload.data
        default:
            return state
    }
}

const menu = (state = [{}], action) => {
    switch (action.type) {
        case 'MENU':
            return state = { ...state, rez: action.payload }
        default:
            return state
    }
}

const gridWhite = (state = { rez: 0, titl: '' }, action) => {
    switch (action.type) {
        case 'GRIDWHITE':
            let white = 0;
            let a, h, g;
            let t = action.params;
            if (t !== undefined) {
                if(t.match(/[0-9]+/) != null ){
                    g = t.match(/[0-9]+/)[0]

                }
                
            }
            if (t !== undefined) {

                h = t.match(/[a-z]+/)[0]

            }

            if (!action.payload) {
                a = [{}]
            } else {
                a = action.payload
            }
            if (h === 'white') {
                a.map((x) =>
                    (g === x.size) ?
                        white = x.white : white
                )
            } else if (h === 'color') {
                a.map((x) =>
                    (g === x.size) ?
                        white = x.color : white
                )
            }else{
                white = 0;
            }

            return state = { ...state, rez: white, titl: h }
        default:
            return { ...state }
    }
}

const tidePrice = (state = { rez: 0, titl: '' }, action) => {
    switch (action.type) {
        case 'TIDEPRICE':
            let white = 0;
            let a, h, g;
            let t = action.params;
            if (t !== undefined) {
                if(t.match(/[0-9]+/) != null ){
                    g = t.match(/[0-9]+/)[0]

                }

            }
            if (t !== undefined) {

                h = t.match(/[a-z]+/)[0]

            }

            if (!action.payload) {
                a = [{}]
            } else {
                a = action.payload
            }
            if (h === 'white') {
                a.map((x) =>
                    (g === x.size) ?
                        white = x.white : white
                )
            } else if (h === 'color') {
                a.map((x) =>
                    (g === x.size) ?
                        white = x.color : white
                )
            }else{
                        white = 0;
            }

            return state = { ...state, rez: white, titl: h }
        default:
            return { ...state }
    }
}

const tide = (state = [{}], action) => {
    switch (action.type) {
        case 'TIDE':
            return state = action.payload.data
        default:
            return state
    }
}

const priceZnac = (state = [{}], action) => {
    switch (action.type) {
        case 'PRICE':

            return state = action.payload
        default:
            return state
    }
}

const priceRezult = (state = { rez: 0 }, action) => {
    switch (action.type) {
        case 'PRICEREZULT':
            return state = { ...state, rez: action.payload }
        default:
            return { ...state }
    }
}
const okno = (state = { rez: 'Одностворчатое окно' }, action) => {
    switch (action.type) {
        case 'OKNO':
            return state = { ...state, rez: action.payload }
        default:
            return { ...state }
    }
}


const windowWidth = (state = { rez: 500 }, action) => {
    switch (action.type) {
        case 'WIDTH':
            let w = action.payload;
            w = w.replace(/[0-9]{0,2}$/, '00');
            return state = { ...state, rez: w }
        default:
            return { ...state }
    }
}

const windowHeight = (state = { rez: 1000 }, action) => {
    switch (action.type) {
        case 'HEIGHT':
            let h = action.payload;
            h = h.replace(/[0-9]{0,2}$/, '00');
            return state = { ...state, rez: h }
        default:
            return { ...state }
    }
}

const profile = (state = { rez: 'Россия, Турция' }, action) => {
    switch (action.type) {
        case 'PROFILE':
            return state = { ...state, rez: action.payload }
        default:
            return { ...state }
    }
}

const stvorka = (state = { rez: 'глухое' }, action) => {
    switch (action.type) {
        case 'STVORKA':
            return state = { ...state, rez: action.payload }
        default:
            return { ...state }
    }
}

const gridInWidth = (state = { rez: 0 }, action) => {

    switch (action.type) {
        case 'GRIDINWIDTH':
            let rez = action.payload * action.params / 1000
            return state = { ...state, rez: rez }
        default:
            return { ...state }
    }
}
const tideInPrice = (state = { rez: 0 }, action) => {

    switch (action.type) {
        case 'TIDEINPRICE':
            let rez = action.payload * action.params / 1000
            
            return state = { ...state, rez: rez }
        default:
            return { ...state }
    }
}
const dopp = (state = {dismanting: '0', setka:'0'},action) =>{
    switch (action.type) {
        case 'DOPPRICE':    
        let a = action.payload;
        let n = action.params;
        let s = action.vibor;
        let d, e;
        a.map((x)=>
        (x.calculanor_id === '1')?
        d = x.dismanting
        :''
        )  
        a.map((x)=>
        (x.calculanor_id === '1')?
        e = x.grid
        :''
        
        )      
        if(n === 'Да' && s === 'setka'){
            return state = { ...state, setka:e }
        }else if(n === 'Нет' && s === 'setka'){
            return state = { ...state, setka:'0' }
        }
        if(n === 'Да' && s === 'demont'){
            return state = { ...state, dismanting:d }
        }else if(n === 'Нет' && s === 'demont'){
            return state = { ...state, dismanting:'0' }
        }
            
        default:
            return { ...state }
    }
}
export const reducerApp = combineReducers({
    grid,
    tide,
    priceZnac,
    windowWidth,
    windowHeight,
    okno,
    profile,
    stvorka,
    gridWhite,
    priceRezult,
    gridInWidth,
    tideInPrice,
    tidePrice,
    dopp,
    menu


})