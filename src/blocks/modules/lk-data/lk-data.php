<div class="rightswinger_start">
    <div class="rightswinger_parent personal_right_colomn">
        <div class="rightswinger_block personal_menu_block" data-criswidth="1000">
            <div class="personal_menu">
                <div class="personal_menu_list">
                    <a href="/personal/orders" class="personal_menu_item personal_menu_item--order"><span class="personal_menu_item_inner"><span
                                class="personal_menu_item_caption">Мои заказы</span></span></a>
                    <a href="/personal/settings.html" class="personal_menu_item personal_menu_item--info personal_menu_item_active "><span
                            class="personal_menu_item_inner"><span class="personal_menu_item_caption">Личная
                                информация</span></span></a>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="rightswinger_left_block rightswinger_left_content settings_left_colomn" style="min-height: auto;">

        <div class="ordering_form_block">
            <div class="ordering_form_head">Данные профиля</div>
            
            <form method="post" enctype="multipart/form-data" class="objectform ajaxform"
                action="/ajax/personal/settings_edit.php" id="settings_form">
                <div onclick="log_out()" class="personal_menu_item personal_menu_exit"><span
                    class="personal_menu_item_inner"><span
                        class="personal_menu_item_caption">Выйти</span></span></div>
                <div class="ordering_form_content">
                    <div class="ordering_form_item ordering_form_item_text" id="ordering_form_title">
                        <div class="ordering_form_caption">ФИО <span class="ordering_form_notnull">*</span></div>
                        <div class="ordering_form_field">
                            <input type="text" name="title" id="title" readonly value="Анастасия Анастасия Анастасия"
                                class="notnull rusavto_inputtext">
                                <span id="title_info" class="field_info"></span>
                            </div>
                            <button class="btn__change">Изменить</button>
                    </div>
                    <div class="ordering_form_item ordering_form_item_text" id="ordering_form_phone">
                        <div class="ordering_form_caption">Телефон (логин) <span class="ordering_form_notnull">*</span>
                        </div>
                        <div class="ordering_form_field">
                           <!-- // TODO добавить кнопку в модалку -->
                            <!-- <div class="rusavto_button4 settings_feedback_button"
                                onclick="ajax_modal('/modal/feedback.html', {'section': 'personal_feedback', 'section_title': 'Заявка на изменение логина', 'link': '/personal/settings.html', 'goal': 'goal_feedback_personal'})">
                                Заявка на изменение</div> -->

                            <!--добавила readonly на инпут-->
                            <div class="submiter_container">
                                <input type="text" readonly disabled="disabled" name="phone"
                                    id="phone" value="+7 (919) 406-40-08"
                                    class="notnull rusavto_inputtext disabled">
                                    <span id="phone_info"
                                    class="field_info"></span>
                            </div>
                            <button class="btn__change">Изменить</button>
                        </div>
                    </div>
                    <div class="ordering_form_item ordering_form_item_text" id="ordering_form_email">
                        <div class="ordering_form_caption">E-mail <span class="ordering_form_notnull">*</span></div>
                        <div class="ordering_form_field">
                            <input type="text" readonly name="email" id="email"
                                value="yetymoye@gmail.com" class="email notnull rusavto_inputtext ">
                                <span id="email_info" class="field_info">

                                </span>
                        </div>
                        <button class="btn__change">Изменить</button>
                    </div>
                    <div class="ordering_form_item ordering_form_item_text" id="ordering_form_city">
                        <div class="ordering_form_caption">Город </div>
                        <div class="ordering_form_field">
                            <input type="text" name="city" readonly id="city" value="Александровск-Сахалинский"
                                class="rusavto_inputtext"><span id="city_info" class="field_info"></span>
                        </div>
                        <button class="btn__change">Изменить</button>
                    </div>
                    <div class="ordering_form_item ordering_form_item_checkbox" id="ordering_form_subscr">
                        <div class="ordering_form_caption"> </div>
                        <div class="ordering_form_field"><input checked="" type="checkbox" name="subscr" value="1"
                                id="settings_form_subscr" class=""><span id="subscr_info"
                                class="field_info"></span><label for="settings_form_subscr">Я хочу получать рассылку об
                                акциях и предложениях по email.</label></div>
                    </div>
                </div>
                <div class="ordering_submit_block personal_submit_block"><input type="hidden" name="posted"
                        value=""><input type="hidden" name="form_compiled" value="1654761147"><input type="text"
                        name="tel" value="" class="engine_form_tel"><input type="hidden" name="table" id="basetable"
                        value="users"><input type="hidden" name="thisvalue" id="base_thisvalue" value="9"><input
                        callerror="" type="button" class="rusavto_button settings_form_button" id="objectformsubmit"
                        value="Сохранить изменения" onclick="form_ajax('settings_form', settings_go)"></div>
            </form>
        </div>
        <!-- // TODO Изменена верстка, ordering_form_hint и ordering_form_descr выненсена в отдельный блок - ordering__block-->
        <div class="ordering_form_block">
            <div class="ordering_form_head">Изменить пароль</div>
            <form method="post" enctype="multipart/form-data" class="objectform modalform ajaxform"
                action="/ajax/personal/pass_edit.php" id="pass_form">
                <div class="ordering__block">
                    <div class="ordering_form_hint"><span>*</span> — обязательные к заполнению поля</div>

                    <div class="ordering_form_descr">Здесь вы можете изменить пароль для своей идентификации на сайте. Новый
                        пароль должен содержать не менее 6 и не более 30 символов: букв, цифр и знаков препинания.</div>
                </div>
                <div class="ordering__box">
                    <div class="ordering_form_content">
                        <div class="ordering_form_item ordering_form_item_password" id="ordering_form_oldpass">
                            <div class="ordering_form_caption">Текущий пароль <span class="ordering_form_notnull">*</span>
                            </div>
                            <div class="ordering_form_field"><input autocomplete="off" type="password" name="oldpass"
                                    value="" id="oldpass" class="notnull rusavto_inputtext"><span id="oldpass_info"
                                    class="field_info"></span></div>
                        </div>
                        <div class="ordering_form_item ordering_form_item_password" id="ordering_form_pass">
                            <div class="ordering_form_caption">Новый пароль <span class="ordering_form_notnull">*</span>
                            </div>
                            <div class="ordering_form_field"><input autocomplete="off" type="password" name="pass" value=""
                                    id="pass" class="notnull rusavto_inputtext"><span id="pass_info"
                                    class="field_info"></span></div>
                        </div>
                        <div class="ordering_form_item ordering_form_item_password" id="ordering_form_pass_repeat">
                            <div class="ordering_form_caption">Еще раз новый пароль <span
                                    class="ordering_form_notnull">*</span></div>
                            <div class="ordering_form_field"><input autocomplete="off" type="password" name="pass_repeat"
                                    value="" id="pass_repeat" class="notnull repeat rusavto_inputtext"><span
                                    id="pass_repeat_info" class="field_info"></span></div>
                        </div>
                    </div>
                    <div class="ordering_submit_block personal_submit_block"><input type="hidden" name="posted"
                            value=""><input type="hidden" name="form_compiled" value="1654761147"><input type="text"
                            name="tel" value="" class="engine_form_tel"><input type="hidden" name="table" id="basetable"
                            value="users"><input type="hidden" name="thisvalue" id="base_thisvalue" value="0"><input
                            callerror="" type="button" class="rusavto_button settings_form_button" id="objectformsubmit"
                            value="Изменить пароль" onclick="form_ajax('pass_form', pass_edit)"></div>
                </div>
            </form>
        </div>

    </div>

</div>