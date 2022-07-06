<section class="form__section-box">
    <div class="common__container">
        <div class="form__section-wrap">
            <div class="form__img">
                <img src="/img/img/form/book.png" alt="Получить каталог продукции">
            </div>
            <div class="form__section-inner">
                <div class="form__section-main">
                    <h2 class="common__subtitle common__subtitle--light">
                        Получить каталог продукции
                    </h2>
                    <span class="form__section-text">
                        Вы можете получить каталог бренда <a href="#">Ariane</a> на свою почту, посмотреть ассортимент
                        и проконсультироваться с нами о его наличии в магазине.
                    </span>
                </div>
                <form method="post" enctype="multipart/form-data" class="objectform modalform ajaxform form__section"
                    action="/modal/autorization.html" id="autorization_form">
                    <div class="newmodal_item newmodal_item_select_wrap">
                        <div class="newmodal_item_select">
                            <select name="" id="" class="select__custom js-select" data-type="- Бренд не выбран -">
                                <option value=""></option>
                                <option value="Брэнд1">Брэнд1</option>
                                <option value="Брэнд2">Брэнд2</option>
                                <option value="Брэнд3">Брэнд3</option>
                                <option value="Брэнд4">Брэнд4</option>
                            </select>
                        </div>
                        <span class="newmodal_item_select_text">
                            В этом поле выберите нужный 
                            бренд
                        </span>
                    </div>
                    <div class="form__section-row">
                        <div id="newmodal_item_title" class="newmodal_item newmodal_item_text">
                            <div class="newmodal_field newmodal_form_field"><input type="text" name="title" id="title"
                                    value="Пантелеймонский Пантелеймон Пантелеймонович"
                                    class=" rusavto_inputtext placeholder" placeholder="ФИО"><span id="title_info"
                                    class="field_info"></span></div>
                            <div class="clearer"></div>
                        </div>
                        <div id="newmodal_item_title" class="newmodal_item newmodal_item_text">
                            <div class="newmodal_field newmodal_form_field"><input type="text" name="mail" id="title"
                                    class=" rusavto_inputtext placeholder" placeholder="Почта"><span id="title_info"
                                    class="field_info"></span></div>
                            <div class="clearer"></div>
                        </div>
                        <input type="submit" class="newmodal_item form__submit" value="Получить каталог">
                    </div>
                    <div class="clearer"></div>
                </form>
            </div>
        </div>
    </div>
</section>