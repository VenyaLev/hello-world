<div class="form" data-validator-scope>
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
<!--		<div class="cols s_24">-->
<!--			<label data-yam-validator="mail" class="click">-->
<!--				<span>E-mail:</span>-->
<!--				<input required type="email">-->
<!--				<span class="message invalid">Например: valera@host.com</span>-->
<!--				<span class="message required">Введите e-mail</span>-->
<!--			</label>-->
<!--		</div>-->
		<div class="cols s_24">
			<label data-yam-validator="text" class="click">
				<span>Фамилия Имя:</span>
				<input type="text" required >
				<span class="message invalid">Например: Валера</span>
				<span class="message required">Введите имя</span>
			</label>
		</div>
		<div class="cols s_24">
			<label data-yam-validator="pass" class="click">
				<span>Пароль:</span>
				<input type="password" required>
				<span class="message invalid">Минимум 8 символов</span>
				<span class="message required">Введите пароль</span>
			</label>
		</div>
		<div class="cols s_24">
			<label data-yam-validator="pass" class="click">
				<span>Пароль еще раз:</span>
				<input type="password" required>
				<span class="message invalid">Минимум 8 символов</span>
				<span class="message required">Введите пароль</span>
			</label>
		</div>
	</div>

	<div class="row collapse">
		<div class="cols s_24">
			<div class="click">
				<div data-submitter="">зарегистрироваться</div>
			</div>
			<input type="submit" value="зарегистрироваться" style="display:none;">
		</div>
	</div>
</div>
