import React from 'react';

function WindCenterList(props) {
    return (
        <div className = "win">
            <div className ="type">Тип окна: 
            <span className="TypeWin"> {props.okno.rez}</span>
            </div>
            <div className="profile">Профиль: 
            <span className="profileWin"> {props.profile.rez}</span>
            </div>
            <div className="sizes">Размер: 
            <span className="sizesWin"><span className="widthR"> {props.windowWidth.rez}</span> X <span className="heightR">{props.windowHeight.rez}</span> ({props.windowWidth.rez * props.windowHeight.rez / 1000000} m2)</span>
            </div>
            <div className="wind">Окно: 
            <span className="windWin"> {props.stvorka.rez}</span>
            </div>
            <div className="podokonnik">Подоконник: 
                <span className="podokonnikWin">  {props.gridrezultcolor}</span><span id="yepod"></span>
            </div>
            <div className="otliv">Отлив: 
                <span className="otlivWin"> {props.tiderezultcolor}</span><span id="yeotl"></span>
            </div>
            <div className="setkaCall">Сетка: 
            <span className="setkaWin"> {(props.dopp.setka > 0)?'Да':'Нет'}</span><span id="yeset"></span>
            </div>
            <div className ="demont">Демонтаж-монтаж: 
            <span className="demontWin"> {(props.dopp.dismanting > 0)?'Да':'Нет'}</span><span id="yed"></span>
            </div>
        </div>
    );
}

export default WindCenterList;