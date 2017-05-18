<div class="form">
	<form action="/" method="get">
		<div class="row collapse">
			<div class="cols s_24 s__12">
				<label class="yam-checkbox radio">
					<input type="radio" name="enter[]">
					<span class="text">Пациент</span>
				</label>
			</div>
			<div class="cols s_24 s__12">
				<label class="yam-checkbox radio">
					<input type="radio" name="enter[]">
					<span class="text">Компания</span>
				</label>
			</div>
		</div>

		<div class="row collapse">
			<div class="cols s_24">
				<label data-yam-validator="^(\+)?(\s)?(\d*\s?){7,}$" class="click">
					<span>Тел:</span>
					<input type="tel" required>
					<span class="message invalid">Например: +38 099 999 99 99</span>
					<span class="message required">Введите телефон</span>
				</label>
			</div>
			<div class="cols s_24">
				<label data-yam-validator="^.{8,}$" class="click">
					<span>Пароль:</span>
					<input type="password" required>
					<span class="message invalid">Минимум 8 символов</span>
					<span class="message required">Введите пароль</span>
				</label>
			</div>
		</div>

		<div class="row collapse">
			<div class="cols s_24">
				<div class="click">
					<div data-submitter="">Войти</div>
				</div>
				<input type="submit" value="Войти" style="display:none;">
			</div>
		</div>
	</form>
</div>
