import React, { useState, useEffect } from 'react';
import { getArticles, array_obj, geIp } from '../actions';
import { Link } from "react-router-dom";
import '../css/home.css';
import Subart from '../components/Subart';
import Artbol from '../components/Artbol';
function Message() {
    const [ip, setip] = useState({ data: [{}], status: 0 });
    useEffect(() => {
        geIp(setip);

    }, []);
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
                                <label htmlFor="username">Ф. И. О. <span id="namespan" /></label>
                                <input name="username" type="text" className="form-control" id="username" placeholder="Ф. И. О." />
                            </div>
                            <div className="col-md mb-3">
                                <label htmlFor="usertel">Номер телефона <span id="telspan" /></label>
                                <div className="input-group">
                                    <div className="input-group-prepend">
                                        <span className="input-group-text" id="inputGroupPrepend">☎</span>
                                    </div>
                                    <input name="usertel" type="text" className="form-control" id="usertel" placeholder="0 (373) 777 7-77-77" aria-describedby="inputGroupPrepend" />
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