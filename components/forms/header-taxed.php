<div class="form large">
	<form action="/" method="get">
		<div class="row">
			<div class="cols s_24 s___12">
				<label data-yam-validator="^([A-zА-я])*\s*([A-zА-я])*\s*([A-zА-я])*$" class="click">
<!--					<span>Ваше имя:</span>-->
					<input type="text" placeholder="Ваше имя:" required>
					<span class="message invalid">Например: Валера</span>
					<span class="message required">Введите имя</span>
				</label>

				<label data-yam-validator="^(\+)?(\s)?(\d*\s?){7,}$" class="click">
<!--					<span>Телефон:</span>-->
					<input type="tel" required placeholder="Телефон:">
					<span class="message invalid">Например: +38 099 999 99 99</span>
					<span class="message required">Введите телефон</span>
				</label>

				<label class="click">
					<span class="leftside">Время:</span>

					<input type="time">
				</label>
			</div>

			<div class="cols s_24 s___12">
				<label class="click">
<!--					<span>Ваши жалобы:</span>-->
					<textarea placeholder="Ваши жалобы:"></textarea>
				</label>
			</div>
		</div>

		<div class="row">
			<div class="cols s_24 m_8">
				<label class="yam-checkbox radio">
					<input type="radio" name="test[]">
					<span class="text">Врач ФИО</span>
				</label>
			</div>
			<div class="cols s_24 m_8">
				<label class="yam-checkbox radio">
					<input type="radio" name="test[]">
					<span class="text">Специализация</span>
				</label>
			</div>
			<div class="cols s_24 m_8">
				<label class="yam-checkbox radio">
					<input type="radio" name="test[]">
					<span class="text">Не знаю</span>
				</label>
			</div>
		</div>

		<div class="row">
			<div class="cols s_24">
				<div class="some-content">
					Если Вы не знаете, просто напишите нам Ваши жалобы. Расскажите о симптомах
					на физическом уровне. Точный момент, когда проявляется симптом, может дать
					важную информацию о круге проблем, которые данный симптом выражает.
				</div>
			</div>

			<div class="cols s_24">
				<div data-yam-select max-items="7">
					<select>
						<option value="option 1">option 1</option>
						<option value="option 2">option 2</option>
						<option value="option 3">option 3</option>
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


		<div class="row end">
			<div class="cols s_24 s___12">
				<input type="submit" value="ОТПРАВИТЬ" style="display:none;">
				<div class="click">
					<div data-submitter="">
						ОТПРАВИТЬ
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
