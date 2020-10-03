import React from 'react';
import axois from 'axios';
import { NavLink } from "react-router-dom";


const initalBaseUrl = 'https://sandani.ru';

export const array_obj = (arr) => {
    let new_arr = [];
    // eslint-disable-next-line
    for (const key in arr) {

        new_arr[key] = arr[key];


    }
    return new_arr;
}

export function menuPod(x, f = () => { }) {
    return (
        (array_obj(x.cild).length !== 0) ?
            <ul className="nav flex-column" onMouseOver={() => f({ lin: true })} >

                {
                    array_obj(x.cild).map((y, i) =>
                        <li className="nav-item" onMouseOver={() => f({ lin: true })} key={y.menu_id}>
                            <NavLink className="nav-link item_lin" onMouseOver={() => f({ lin: true })} to={`${y.menu_alias}`} style={{ fontSize: '12pt' }} activeStyle={{ color: '#2ca612' }}>
                                {y.menu_name}
                            </NavLink>{menuPod(y)}
                        </li>
                    )
                }
            </ul>
            : ''
    )
}

export function menuUpdate() {
    axois({
        method: "post",
        url: initalBaseUrl + '/api/getdb/update.php',
        data: { id: '0', names: 'Главная', alias: '/', save: 'menu' },
        headers: { 'content-type': 'application/x-www-form-urlencoded' }
    });
}


export function getMenu(f) {
    axois.get(initalBaseUrl + '/api/getdb/menupublic.php')
        .then(function (response) {
            f({ data: response.data, status: response.status });
        })
}

export function getPodMenu(f) {
    axois.get(initalBaseUrl + '/api/getdb/menu.php')
        .then(function (response) {
            f({ data: response.data, status: response.status });
        })
}
export function getLogo(f) {
    axois.get('/api/db/logo.json')
        .then(function (response) {
            f({ data: response.data, status: response.status });
        })
}

export function connectPanel(f) {
    axois.get(initalBaseUrl + '/api/getdb/connectpanel.php')
        .then(function (response) {
            f({ data: response.data, status: response.status });
        })
}


export function getArticles(f) {
    axois.get(initalBaseUrl + '/api/getdb/articles.php')
        .then(function (response) {
            f({ data: response.data, status: response.status });
        })
}

export function getArticlesAlias(f, alias) {
    axois.get(initalBaseUrl + '/api/getdb/articlesalias.php?art_alias=' + alias)
        .then(function (response) {
            f({ data: response.data, status: response.status });
        })
}

export function getArticlesRow(f, alias) {
    axois.get(initalBaseUrl + '/api/getdb/getartrow.php?alias=' + alias)
        .then(function (response) {
            f({ data:response.data, status: response.status });
        })
}

export function geIp(f) {
    axois.get(`${initalBaseUrl}/api/getdb/message.php`)
        .then(function (response) {
            f({ data: response.data, status: response.status });
        })
}