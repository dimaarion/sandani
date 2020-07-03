import React from 'react';


function Rezult(props) {






  let price = Number(props.priceRezult.rez);
  let grid = Number(props.gridInWidth.rez);
  let tide = Number(props.tideInPrice.rez);
  let setka = Number(props.dopp.setka);
  let dismanting = Number(props.dopp.dismanting);
  
  let summa = price + grid + tide + setka + dismanting;
  summa = summa.toFixed(1);
  return (
    <div>
      <table className="table">
        <thead>
          <tr>
            <th className = 'text-center' scope="col">Окно</th>
            <th className = 'text-center' scope="col">Подоконник</th>
            <th className = 'text-center' scope="col">Отлив</th>
            <th className = 'text-center' scope="col">Сетка</th>
            <th className = 'text-center' scope="col">Демонтаж-монтаж</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td className = 'text-center'>{price} ye.</td>
            <td className = 'text-center'>{grid} ye.</td>
            <td className = 'text-center'>{tide} ye.</td>
            <td className = 'text-center'>{setka} ye.</td>
            <td className = 'text-center'>{dismanting} ye.</td>
          </tr>
        </tbody>
      </table>
      
      <div className="rezultCall text-center">

        <div className="test">{summa} ye.</div>



      </div>
    </div>

  );
}

export default Rezult;