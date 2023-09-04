<div class="modal fade" id="mainModal" tabindex="-1" aria-labelledby="mainModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mainModalLabel">Отправить заявку на бесплатный замер</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="row">
                <div class="col-sm text-center form-modal-p">
                    <h3>Спасибо!</h3>
                    <b>Ваша заявка успешно отправлена.</b>
                    <p>В ближайшее время с вами свяжется наш менеджер для уточнения необходимой информации.</p>
                </div>
                <div class="col-sm form-modal-n">

                    <form class="needs-validation" method="POST" id="form_message">
                        @method('POST')
                        @csrf
                        <div class="form ">
                            <div class="col-md mb-3 p-2">

                                <label for="username">Ваше имя <span id="namespan"></span></label>
                                <div class="input-group has-validation">
                                    <input minlength="3" maxlength="20" name="username" type="text" class="form-control" id="username" aria-describedby="inputGroupPrepend3 validationUsername" placeholder="Ваше имя" required>
                                    <div id="validationUsername" class="invalid-feedback">
                                        Пожалуйста, напишите ваше имя.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md mb-3 p-2">
                                <label for="usertel">Номер телефона <span id="telspan"></span></label>
                                <div class="input-group has-validation">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <i class="bi bi-telephone-fill"></i>
                                        </span>
                                    </div>
                                    <input pattern="[0-9]" minlength="3" maxlength="20" name="usertel" type="text" class="form-control" id="usertel" placeholder="0 (373) 777 7-77-77" aria-describedby="inputGroupPrepend validationUserTel" required>
                                    <div id="validationUserTel" class="invalid-feedback">
                                        Пожалуйста, напишите ваш номер телефона.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 p-2" id="calculator-container">
                              <label for="calculator" class="form-label"></label>
                              <div id = "calculator-text" ></div>
                              <textarea class="form-control" name="message" id="calculator" rows="3" hidden = "true">
                                
                              </textarea>
                            </div>

                        </div>

                        <div class="text-center pb-3"><button name="message_send" id="submitd" value="Отправить сообщение" class="btn btn-success ml-3 " type="button">Отправить сообщение</button></div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>