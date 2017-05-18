<div class="page-make-service">

	<form action="/" method="get">
        <div class="row">
            <div class="cols s_24 m_16 m__17 l_16 l__17">
                <div class="row">
                    <div class="cols s_24 s___6">
                        <div class="label"><span>Услуги:</span></div>
                    </div>

                    <div class="cols s_24 s___18 l__18">
                        <div class="uslugi"><span>Рентгенография сустава (3 проекции). Рентгенография сустава (3 проекции) сустава.</span>
                            <span class="price"><b>Цена:</b>246грн</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cols s_24 m_8 m__7 l_8 l__7">
                <div class="label others-usluga"> <a href="#">Другая услуга</a></div>

            </div>
        </div>
		<div class="row">
            <div class="cols s_24 m_16 m__17 l_16 l__17 s_order-2 m_order-1">
                <div class="row">
                    <div class="cols s_24 s___6">
                        <div class="label"><span>Специальности:</span></div>
                    </div>

                    <div class="cols s_24 s___18 l__18">
                        <div data-yam-select max-items="7">
                            <select>
                                <option value="option 1">(Выберите специальность)</option>
                                <option value="option 2">(Выберите специальность)</option>
                                <option value="option 3">(Выберите специальность)</option>
                                <option value="option 4">option 4</option>
                                <option value="option 5">option 5</option>
                                <option value="option 6">option 6</option>
                                <option value="option 7">option 7</option>
                                <option value="option 8">option 8</option>
                                <option value="option 9">option 9</option>
                                <option value="option 10">option 10</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="cols s_24 s___6">
                        <div class="label"><span>Врачи:</span></div>
                    </div>

                    <div class="cols s_24 s___18 l__18">
                        <div data-yam-select max-items="7">
                            <select>
                                <option value="option 1">(Выберите врача)</option>
                                <option value="option 2">(Выберите врача)</option>
                                <option value="option 3">(Выберите врача)</option>
                                <option value="option 4">option 4</option>
                                <option value="option 5">option 5</option>
                                <option value="option 6">option 6</option>
                                <option value="option 7">option 7</option>
                                <option value="option 8">option 8</option>
                                <option value="option 9">option 9</option>
                                <option value="option 10">option 10</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="cols s_24 s___6">
                        <div class="label"><span>Время:</span></div>
                    </div>

                    <div class="cols s_24 s___18 l__18">
                        <div data-yam-select max-items="7">
                            <select>
                                <option value="option 1">13:55-14:45(Абрамов)</option>
                                <option value="option 2">(Выберите врача)</option>
                                <option value="option 3">(Выберите врача)</option>
                                <option value="option 4">option 4</option>
                                <option value="option 5">option 5</option>
                                <option value="option 6">option 6</option>
                                <option value="option 7">option 7</option>
                                <option value="option 8">option 8</option>
                                <option value="option 9">option 9</option>
                                <option value="option 10">option 10</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="cols s_24 s___6">
                        <div class="label"><span>Ваши жалобы:</span></div>
                    </div>

                    <div class="cols s_24 s___18 l__18">
                        <label class="click">
                            <textarea placeholder=""></textarea>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="cols s_24 s___9 s___offset-15 l__7 l__offset-17">
                        <label class="click">
                            <input type="submit" value="сохранить" />
                        </label>
                    </div>
                </div>
            </div>
            <div class="cols s_24 m_8 m__7 l_8 l__7 s_order-1 m_order-2" >
                <div class="calendar">
                    <div id="ui-datepicker-div"></div>
						  <script>
							  EXE(function() {
								  // документацію по даному плагіну можна прочитать тут https://api.jqueryui.com/datepicker/

								  $("#ui-datepicker-div").datepicker({
								  		firstDay: 1,
								  		dateFormat: "dd.mm.yy",
								  		dayNames: [ "Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота" ],
								  		dayNamesShort: [ "Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб" ],
								  		dayNamesMin: [ "Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб" ],
								  		monthNames: [ "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" ],
								  		minDate: new Date(2014, 8, 15),
										onSelect: function(date) {
											$("#hidden-input-id").val(date);
										}
								  	});
									$("#ui-datepicker-div" ).datepicker( "setDate", "23.03.2016" );
							  });
						  </script>
                </div>
            </div>
		</div>
       <hr>
	</form>
</div>
