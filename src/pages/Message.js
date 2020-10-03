import React, { useState, useEffect } from 'react';
import { geIp } from '../actions';
import '../css/home.css';

function Message() {
    const [ip, setip] = useState({ data: [{}], status: 0 });
    const [username, setusername] = useState('');
    const [usertel, setusertel] = useState('');
    const [usermail, setusermail] = useState('');

    function preg_replace_tel(u) {
        let txt = u.concat();
        let arr = [];
        txt.split('')
        .map((x, i)=> arr[i] = (i == 1)?'(':x)
        .map((x, i) => arr[i] = (i == 5) ? ')' : x)
        .map((x, i) => arr[i] = (i == 6) ? ' ' : x)
        .map((x, i) => arr[i] = (i == 10) ? ' ' : x)
        .map((x, i) => arr[i] = (i == 12) ? '-' : x)
        .map((x, i) => arr[i] = (i == 15) ? '-' : x)
        .map((x, i) => arr[i] = (i > 16) ? '' : x);
        return arr.join('').replace(/[a-z_A-Z_а-я_А-Я]/g,''); 
    }
    useEffect(() => {
        geIp(setip);
    }, []);
    useEffect(() => {
        setusertel(preg_replace_tel(usertel));
    }, [usertel]);
    return (
        <div className="container">
            <h2>Напишите нам сообщение</h2>
            <p>Если у Вас есть вопросы или Вы желаете оставить заявку на замер окон, заполните форму, приведенную ниже.</p>
            <p>* Все поля ОБЯЗАТЕЛЬНЫ для заполнения!</p>
            <div className="row">
                <div className="col-sm-3" />
                <div className="col-sm">
                    <form className="needs-validation" action="/api/getdb/message.php" method="post" id="form_message">
                        <div className="form">
                            <div className="col-md mb-3">
                                <label htmlFor="username">Ф. И. О. <span id="namespan" />{username}</label>
                                <input onChange={(e) => setusername(e.target.value)} name="username" type="text" className="form-control" id="username" placeholder="Ф. И. О." />
                            </div>
                            <div className="col-md mb-3">
                                <label htmlFor="usertel">Номер телефона <span id="telspan" />{usertel}</label>
                                <div className="input-group">
                                    <div className="input-group-prepend">
                                        <span className="input-group-text" id="inputGroupPrepend">☎</span>
                                    </div>
                                    <input value={usertel} onChange={(e) => setusertel(e.target.value)} name="usertel" type="text" className="form-control" id="usertel" placeholder="0 (373) 777 7-77-77" aria-describedby="inputGroupPrepend" />
                                </div>
                            </div>
                            <div className="col-md mb-3">
                                <label htmlFor="usermail">Электронная почта <span id="mailspan" /></label>
                                <div className="input-group">
                                    <div className="input-group-prepend">
                                        <span className="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input name="usermail" type="text" className="form-control" id="usermail" placeholder="Электронная почта" aria-describedby="inputGroupPrepend" />
                                </div>
                            </div>
                            <div className="col-md mb-3">
                                <label htmlFor="theme">Тема</label>
                                <input name="theme" type="text" className="form-control" id="theme" placeholder="Тема сообщения" />
                                <div className="invalid-feedback">
                                    Тема.
            </div>
                            </div>
                            <div className="col-sm mb-3">
                                <label htmlFor="message">Сообщение</label>
                                <textarea name="message" id="message" className="form-control" rows={3} placeholder="Сообщение" defaultValue={""} />
                            </div>
                        </div>
                        <button name="message_send" id="submitd" value="Отправить сообщение" className="btn btn-primary ml-3" type="submit">Отправить сообщение</button>
                    </form>
                </div>
                <div className="col-sm-3" />
            </div>
        </div>

    )
}

export default Message;