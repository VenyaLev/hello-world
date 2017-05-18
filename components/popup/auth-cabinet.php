<div class="yam-popup">
	<div class="window style-auth-cabinet" data-window="auth-cabinet">
		<div class="overlay"></div>
		
		<div class="container">
			<span class="close">x</span>
			
			<p class="h">Вход в личный кабинет</p>
			
			<form action="/" method="get">
			
				<div class="label">Логин</div>
				<label data-yam-validator>
					<input required type="tel" placeholder="+38">
					<span class="message invalid">Например: Валера</span>
					<span class="message required">Введите логин</span>
				</label>
				
				<div class="label">Пароль</div>
				<label data-yam-validator="pass">
					<input required type="password">
					<span class="message invalid">Минимум 6 символов</span>
					<span class="message required">Введите пароль</span>
				</label>
				
				<label class="left">
					<input type="submit" value="Войти">
				</label>
				
				<div class="right">
					<a href="#">Напомнить пароль</a>
					<a href="#">Создать новый профиль</a>
				</div>

				<div class="clearfix"></div>

				<span class="soc">Или войдите, используя социальные сети:</span>
				social widgets auth
			</form>
		</div>
	</div>
</div>