<div class="page-doctors">

	<form action="/" method="get">
		<div class="row">
			<div class="cols s_24">
				<div class="row">
					<div class="cols s_24 s___6 l_3">
						<div class="label"><span>Специальность:</span></div>
					</div>

					<div class="cols s_24 s___18 l_21">
						<div data-yam-select max-items="7">
							<select>
								<option value="option 1">Терапевт</option>
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
			</div>
		</div>
	</form>
	<hr>


	<div class="block-specialty">
		<div class="row">
			<div class="cols s_24">
				<ul class="grid s_1 s___2 m_3 l_4 l__5">

					<li>
						<div class="yellow-block">
							<div class="text">
								Календарь – удобный инструмент планирования.
								Выбираете месяц и нажимаете на число которое Вам подходит.
							</div>

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

							<div class="text">
								Теперь из появившегося вписка выберете специалиста и время его посещения.
							</div>
						</div>
					</li>

					<li>
						<span class="wrap-block">
							<span class="img" style="background-image: url('<?=$yamEgg->img();?>images/girl.jpg')"></span>
							<span class="fio">
								<span>Леонідовна</span>
							</span>

							<a href="#" class="yam-button style-2">О враче</a>

							<div class="links">
								<div class="row">
									<div class="cols s_12">
										<a href="#">8:30-9:00</a>
										<a href="#">9:00-9:30</a>
										<a href="#">10:00-10:30</a>
										<a href="#">10:30-11:00</a>
										<a href="#">11:30-12:00</a>
									</div>

									<div class="cols s_12">
										<a href="#">12:30-13:00</a>
										<a href="#">14:00-14:30</a>
										<a href="#">14:30-15:00</a>
										<a href="#">15:00-15:30</a>
										<a href="#">16:30-17:00</a>
									</div>
								</div>
							</div>
						</span>
					</li>
					<li>
						<span class="wrap-block">
							<span class="img" style="background-image: url('<?=$yamEgg->img();?>images/boy.jpg')"></span>
							<span class="fio">
								<span>Білошицькa</span>
								<span>Катерина</span>
								<span>Леонідовна</span>
								<span>Леонідовна</span>
							</span>
							<a href="#" class="yam-button style-2">О враче</a>

							<span class="links">
								<a href="#">Записаться к специалисту</a>
							</span>
						</span>
					</li>
					<li>
						<span class="wrap-block">
							<span class="img" style="background-image: url('<?=$yamEgg->img();?>images/doctor2.jpg')"></span>
							<span class="fio">
								<span>Білошицькa</span>
								<span>Катерина</span>
								<span>Леонідовна</span>
							</span>
							<a href="#" class="yam-button style-2">О враче</a>

							<div class="links">
								<div class="row">
									<div class="cols s_12">
										<a href="#">8:30-9:00</a>
										<a href="#">9:00-9:30</a>
										<a href="#">10:00-10:30</a>
										<a href="#">10:30-11:00</a>
										<a href="#">11:30-12:00</a>
									</div>

									<div class="cols s_12">
										<a href="#">12:30-13:00</a>
										<a href="#">14:00-14:30</a>
										<a href="#">14:30-15:00</a>
										<a href="#">15:00-15:30</a>
										<a href="#">16:30-17:00</a>
									</div>
								</div>
							</div>
						</span>
					</li>

					<li>
						<span class="wrap-block">
							<span class="img" style="background-image: url('<?=$yamEgg->img();?>images/vertical.jpg')"></span>
							<span class="fio">
								<span>Білошицькa</span>
								<span>Катерина</span>
								<span>Леонідовна</span>
							</span>
							<a href="#" class="yam-button style-2">О враче</a>

							<span class="links">
								<a href="#">Записаться к специалисту</a>
							</span>
						</span>
					</li>

					<li>
						<span class="wrap-block">
							<span class="img" style="background-image: url('<?=$yamEgg->img();?>images/gorizont.jpg')"></span>
							<span class="fio">
								<span>Білошицькa</span>
								<span>Катерина</span>
								<span>Леонідовна</span>
							</span>
							<a href="#" class="yam-button style-2">О враче</a>

							<div class="links">
								<div class="row">
									<div class="cols s_12">
										<a href="#">8:30-9:00</a>
										<a href="#">9:00-9:30</a>
										<a href="#">10:00-10:30</a>
										<a href="#">10:30-11:00</a>
										<a href="#">11:30-12:00</a>
									</div>

									<div class="cols s_12">
										<a href="#">12:30-13:00</a>
										<a href="#">14:00-14:30</a>
										<a href="#">14:30-15:00</a>
										<a href="#">15:00-15:30</a>
										<a href="#">16:30-17:00</a>
									</div>
								</div>
							</div>
						</span>
					</li>

					<li>
						<span class="wrap-block">
							<span class="img" style="background-image: url('<?=$yamEgg->img();?>images/doctor3.jpg')"></span>
							<span class="fio">
								<span>Білошицькa</span>
								<span>Катерина</span>
								<span>Леонідовна</span>
							</span>
							<a href="#" class="yam-button style-2">О враче</a>

							<span class="links">
								<a href="#">Записаться к специалисту</a>
							</span>

						</span>
					</li>

				</ul>
			</div>
		</div>
	</div>

	<a href="#" class="yam-link style-2"><i class="fa fa-reply"></i>назад</a>
</div>
