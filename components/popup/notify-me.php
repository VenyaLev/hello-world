<div class="yam-popup">
	<div class="window style-notifyMe" data-window="notifyMe">
		<div class="overlay"></div>
		<div class="container">
			<span class="close">x</span>
			
			<p class="h">Сообщите меня о чем-то</p>
			
			<form action="/" method="get">
				<div class="label">Ваше имя <i>*</i></div>
				<label data-yam-validator="text">
					<input type="text" required placeholder="text">
					<span class="message invalid">Например: Валера</span>
					<span class="message required">Введите имя</span>
				</label>
				
				<div class="label">Ваш e-mail <i>*</i></div>
				<label data-yam-validator="mail">
					<input required placeholder="test@domen.com" type="email">
					<span class="message invalid">Например: valera@host.com</span>
					<span class="message required">Введите e-mail</span>
				</label>
				
				<label>
					<input type="submit" value="send">
				</label>
			</form>
		</div>
	</div>
</div>