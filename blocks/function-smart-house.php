<div class="function-smart-house" data-watch-scroll>
    <div class="h1">дом с системой интелектуального управления</div>

    <? include $yamEgg->incl()."includes/components/sliders/function-smart-house.php"; ?>

    <!-- класы в блоке buyHouse (0,1,2...) и масив arr с id в слайдере, должны быть как и атрибут data-id в блоке item слайдера -->
    <div class="houses" >
        <div class="buyHouse 0">
            <div class="container">
                <div class="row">
                    <div class="cols s_24 l_8">
                        <p class="nameHouse reg"><span>название дома: </span>Дом витан 1</p>
                        <p class="complit">выберите оборудование:</p>
                        <ul>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Базовое оборудование</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Управление освещением</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Автоматизация помещений</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Управление кондиционерами</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Управление шторами</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Сенсорные панели</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Мультирум</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="cols s_24 l_8">
                        <p class="nameHouse"><span>Базовая цена дома:  </span>10 000 $</p>

                        <ul class="blockBasicCoast">
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Управление отоплением/теплым полом</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Защита от протечек воды</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="cols s_24 l_8">
                        <p class="nameHouse"><span>Итого:  </span>50 000 $</p>
                        <p>- Базовая цена: 10 000$</p>
                        <p>- Стоимость оборудования: 5 000$</p>

                        <form>
                            <label data-yam-validator="text">
                                <input type="text" required placeholder="text">
                                <span class="message invalid">Например: Валера</span>
                                <span class="message required">Введите имя</span>
                            </label>
                            <label data-yam-validator="phone">
                                <input type="tel" required placeholder="tel">
                                <span class="message invalid">Например: +38 099 999 99 99</span>
                                <span class="message required">Введите телефон</span>
                            </label>
                            <label>
                                <input type="submit" value="отправить заявку">
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="buyHouse 1">
            <div class="container">
                <div class="row">
                    <div class="cols s_24 l_8">
                        <p class="nameHouse reg"><span>название дома: </span>Дом витан 2</p>
                        <p class="complit">выберите оборудование:</p>
                        <ul>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Базовое оборудование</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Управление освещением</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Автоматизация помещений</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Управление кондиционерами</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Управление шторами</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Сенсорные панели</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Мультирум</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="cols s_24 l_8">
                        <p class="nameHouse"><span>Базовая цена дома:  </span>10 000 $</p>

                        <ul class="blockBasicCoast">
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Управление отоплением/теплым полом</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Защита от протечек воды</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="cols s_24 l_8">
                        <p class="nameHouse"><span>Итого:  </span>50 000 $</p>
                        <p>- Базовая цена: 10 000$</p>
                        <p>- Стоимость оборудования: 5 000$</p>

                        <form>
                            <label data-yam-validator="text">
                                <input type="text" required placeholder="text">
                                <span class="message invalid">Например: Валера</span>
                                <span class="message required">Введите имя</span>
                            </label>
                            <label data-yam-validator="phone">
                                <input type="tel" required placeholder="tel">
                                <span class="message invalid">Например: +38 099 999 99 99</span>
                                <span class="message required">Введите телефон</span>
                            </label>
                            <label>
                                <input type="submit" value="отправить заявку">
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="buyHouse 2">
            <div class="container">
                <div class="row">
                    <div class="cols s_24 l_8">
                        <p class="nameHouse reg"><span>название дома: </span>Дом витан 3</p>
                        <p class="complit">выберите оборудование:</p>
                        <ul>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Базовое оборудование</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Управление освещением</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Автоматизация помещений</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Управление кондиционерами</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Управление шторами</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Сенсорные панели</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Мультирум</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="cols s_24 l_8">
                        <p class="nameHouse"><span>Базовая цена дома:  </span>10 000 $</p>

                        <ul class="blockBasicCoast">
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Управление отоплением/теплым полом</span>
                                </label>
                            </li>
                            <li>
                                <label class="yam-checkbox">
                                    <input type="checkbox">
                                    <span class="text">Защита от протечек воды</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="cols s_24 l_8">
                        <p class="nameHouse"><span>Итого:  </span>50 000 $</p>
                        <p>- Базовая цена: 10 000$</p>
                        <p>- Стоимость оборудования: 5 000$</p>

                        <form>
                            <label data-yam-validator="text">
                                <input type="text" required placeholder="text">
                                <span class="message invalid">Например: Валера</span>
                                <span class="message required">Введите имя</span>
                            </label>
                            <label data-yam-validator="phone">
                                <input type="tel" required placeholder="tel">
                                <span class="message invalid">Например: +38 099 999 99 99</span>
                                <span class="message required">Введите телефон</span>
                            </label>
                            <label>
                                <input type="submit" value="отправить заявку">
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>