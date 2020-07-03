import React from 'react';


function FormParametr(props) {
    return (
        <div>
           <h5>{props.okno.rez}</h5> 
            <label htmlFor="types">Тип окна</label>
            <select id="types" className="select-right-prof form-control custom-select">
                <option key = '1112' onClick = {(e)=>props.getOkno(e.target.value)} className="optionProfA">Одностворчатое окно</option>
                <option key = '1122' onClick = {(e)=>{return (props.getOkno(e.target.value),props.getStvorka("Поворотное"))}} className="optionProfB">Двустворчатое окно</option>
                <option key = '1132' onClick = {(e)=>{return (props.getOkno(e.target.value),props.getStvorka("Поворотное"))}} className="optionProfC">Трехстворчатое окно</option>
            </select>
            <label htmlFor="prof">Профиль</label>
            <select id="prof" className="select-right-prof form-control custom-select">
                <option key = '111' onClick = {(e)=>props.getProfile(e.target.value)} className="optionProfA">Россия, Турция</option>
                <option key = '112' onClick = {(e)=>props.getProfile(e.target.value)} className="optionProfB">3-камерный</option>
                <option key = '113' onClick = {(e)=>props.getProfile(e.target.value)} className="optionProfC">5-камерный</option>
            </select>
            <label htmlFor="stv">Окно</label>
            <select id="stv" className="select-right form-control custom-select">
                {(props.okno.rez === 'Одностворчатое окно')?<option key = '114' onClick = {(e)=>props.getStvorka(e.target.value)} value = "глухое" className="optionA">Глухое</option>:''}
                <option key = '115' onClick = {(e)=>props.getStvorka(e.target.value)} className="optionB">Поворотное</option>
                <option key = '116' onClick = {(e)=>props.getStvorka(e.target.value)} className="optionC">Поворотно-откидное</option>
            </select>
            <label className="" htmlFor="podok">Подоконник</label>
            <select className="select-right-podok form-control custom-select" id="podok">
                <option onClick = {(e)=>props.gridWhites(props.grid,e.target.value, props.windowWidth.rez)} value = "no" className="option-podok-white-no">Нет</option>
                {
                    props.grid.map((x) =>
                        <option onClick = {(e)=>props.gridWhites(props.grid,e.target.value, props.windowWidth.rez)} key={x.grid_id + 2} value = {'white' + x.size} className={"option-podok-white-" + x.grid_id}> Белый {x.size} мм.</option>

                    )
                }
                {
                    props.grid.map((p) =>
                        <option onClick = {(e)=>props.gridWhites(props.grid,e.target.value, props.windowWidth.rez)} key={p.grid_id + 3} value = {'color' + p.size} className={"option-podok-color-" + p.grid_id + 2}> Цветной {p.size} мм.</option>

                    )
                }

            </select><label className="" htmlFor="otliv">Отлив</label>
            <select className="select-right-otliv form-control custom-select" id="otliv">
                <option onClick = {(e)=>props.tidePrices(props.tide,e.target.value, props.windowWidth.rez)} value = "no" className="option-otliv-white-no">Нет</option>
                {
                    props.tide.map((white) =>
                        <option onClick = {(e)=>props.tidePrices(props.tide,e.target.value, props.windowWidth.rez)} key={white.tide_id + 4} value = {'white' + white.size} className={"option-podok-color-" + white.tide_id + 4}> Белый {white.size} мм.</option>
                    )
                }
                {
                    props.tide.map((color) =>
                        <option onClick = {(e)=>props.tidePrices(props.tide,e.target.value, props.windowWidth.rez)} key={color.tide_id + 5} value = {'color' + color.size} className={"option-podok-color-" + color.tide_id + 6}> Цветной {color.size} мм.</option>
                    )
                }
            </select><label htmlFor="setka">Сетка</label>
            <select id="setka" className="select-right-setka form-control custom-select">
                <option onClick = {(e)=>props.getdopp(e.target.value,'setka')} className="option-setka-no">Нет</option>
                <option onClick = {(e)=>props.getdopp(e.target.value,'setka')} className="option-setka-yes">Да</option>
            </select><label htmlFor="dimontaj">Демонтаж-монтаж</label>
            <select id="dimontaj" className="select-right-dimontaj form-control custom-select">
                <option onClick = {(e)=>props.getdopp(e.target.value,'demont')} className="option-dimontaj-no">Нет</option>
                <option onClick = {(e)=>props.getdopp(e.target.value,'demont')} className="option-dimontaj-yes">Да</option>
            </select>
        </div>
    );
}

export default FormParametr;