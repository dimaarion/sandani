import React, { useEffect } from 'react';



function WindCenter(props) {
    
    let img, w, wmin, wmax, hmin, hmax;


    if (props.okno.rez === 'Одностворчатое окно') {
        w = 200;
        wmin = '500';
        wmax = '1200';
        hmin = '1000';
        hmax = '1700';
    } else if (props.okno.rez === 'Двустворчатое окно') {
       
        w = 250;
        wmin = '1000';
        wmax = '1700';
        hmin = '1000';
        hmax = '1700';

    } else if (props.okno.rez === 'Трехстворчатое окно') {
        img = "/img/winTrPov.png";
        w = 300
        wmin = '1600';
        wmax = '2300';
        hmin = '1000';
        hmax = '1700';
    }

    if(props.okno.rez === 'Одностворчатое окно' && props.stvorka.rez === 'глухое'){
        img = "/img/winOdGl.png";
    }else if(props.okno.rez === 'Одностворчатое окно' && props.stvorka.rez === 'Поворотное'){
        img = "/img/winOdPov.png";
    }else if(props.okno.rez === 'Одностворчатое окно' && props.stvorka.rez === 'Поворотно-откидное'){
        img = "/img/winOdPovOt.png";
    }
    if(props.okno.rez === 'Двустворчатое окно' && props.stvorka.rez === 'Поворотное'){
        img = "/img/winDvPov.png";
    }else if(props.okno.rez === 'Двустворчатое окно' && props.stvorka.rez === 'Поворотно-откидное'){
        img = "/img/winDvPovOt.png";
    }
    if(props.okno.rez === 'Трехстворчатое окно' && props.stvorka.rez === 'Поворотное'){
        img = "/img/winTrPov.png";
    }else if(props.okno.rez === 'Трехстворчатое окно' && props.stvorka.rez === 'Поворотно-откидное'){
        img = "/img/winTrPovOt.png";
    }

    useEffect(() => {
       
            props.windowWidths(wmin)
            props.windowHeights(hmin)
            
    }, [wmin,hmin])
    return (
        <div >
            {}
            <table className="table-left-top-call">
                <tbody>
                    <tr className="tr-top-colsp">
                        <td className="td-top-0"></td>
                        <td className="td-top-1">
                            <div className="num-top text-center">{props.windowWidth.rez}</div>
                        </td>
                    </tr>
                    <tr className="tr-top">
                        <td className="td-left-0">
                            <div className="num-left text-center">{props.windowHeight.rez}</div>
                        </td>
                        <td className="td-top-2 text-center">
                            <img className="img-left" src={img} style={{ cursor: 'none', width: w + 'px', height: 250 + 'px' }} />
                        </td>
                        <td className="td-top-5">
                            <input onChange={(e) => props.windowHeights(e.target.value)} type="range" min={hmin} max={hmax} className="num-right" />
                        </td>
                    </tr>
                    <tr className="tr-bottom">
                        <td className="td-bottom-0 bt">
                        </td>
                        <td className="td-bottom-1 bt">
                            <input onChange={(e) => props.windowWidths(e.target.value)} type="range" min={wmin} max={wmax} className="num-bottom-1 in" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    );
}



export default WindCenter;