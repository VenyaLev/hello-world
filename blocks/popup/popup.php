<div class="popup">

	<div class="window" data-window="error">
		<div class="overlay"></div>
		<div class="container"></div>
	</div>

	<div class="window" data-window="success">
		<div class="overlay"></div>
		<div class="container"></div>
	</div>

	<div class="window" data-window="info">
		<div class="overlay"></div>
		<div class="container"></div>
	</div>

	<div  class="window" data-window="callback">
		<div class="overlay"></div>
		<div id="callback" class="container">
			<div data-header></div>
<!--			<span class="close">x</span>-->
			<p class="h">Связаться с нами</p>
			
			<form action="core/php/ajax.php" method="get" data-use-ajax>
				<input type="hidden" name="popup" value="callback">
				
				<label>
					<span>Имя:</span>
					<input type="text">
				</label>
				<label>
					<span>телефон:</span>
					<input type="tel">
				</label>
				<label>
					<input type="submit" value="отправить">
				</label>
			</form>
		</div>
	</div>
	
	<div class="window" data-window="ask-question">
		<div class="overlay"></div>
		<div class="container">
			<div data-header></div>
			<span class="close">x</span>
			<p class="h">Обратная связь</p>
			
			<form action="core/php/ajax.php" method="get" data-use-ajax>
				<input type="hidden" name="popup" value="callback">
				
				<label>
					<span>Ваше имя (обязательно)</span>
					<input type="text">
				</label>
				<label>
					<span>Телефон (обязательно)</span>
					<input type="tel">
				</label>
				<label>
					<span>Сообщение</span>
					<textarea></textarea>
				</label>
				<label>
					<input type="submit" value="отправить">
				</label>
			</form>
		</div>
	</div>
	
	<div class="window" data-window="thank-you">
		<div class="overlay"></div>
		<div class="container">
			<div data-header></div>
			<span class="close">x</span>
			
			<div class="line"></div>
			
			<div class="thin">Спасибо!</div>
			
			<div class="fat">
				ваша заявка<br/>принята, мы с вами<br/>свяжемся<br/>в ближайшее время
			</div>
			
			<div class="line"></div>
			
		</div>
	</div>

	<div class="window" data-window="notifyMe">
		<div class="overlay"></div>
		<div class="container">
			<span class="close">x</span>
			<p class="h">Notify me</p>
			<form action="core/php/ajax.php" method="get" data-use-ajax>
				<input type="hidden" name="popup" value="callback">
				<label>
					<span>Name</span>
					<input type="text">
				</label>
				<label>
					<span>E-mail</span>
					<input type="email">
				</label>
				<label>
					<input type="submit" value="send">
				</label>
			</form>
		</div>
	</div>

	<div class="window" data-window="one-click-buy">
		<div class="overlay"></div>
		<div class="container">
			<span class="close">x</span>
			<p class="h">быстрый заказ товара</p>
			<form action="core/php/ajax.php" method="get" data-use-ajax>
				<label>
					<span>Ваше имя (обязательно)</span>
					<input type="text">
				</label>
				<label>
					<span>Телефон (обязательно)</span>
					<input type="tel">
				</label>
				<label>
					<input type="submit" value="заказать">
				</label>
			</form>
		</div>
	</div>

    <div class="window" data-window="auth-cabinet">
        <div class="overlay"></div>
        <div class="container">
            <span class="close">x</span>
            <p class="h">Вход в личный кабинет</p>
            <form action="/" method="get">
                <label>
                    <span>Логин:</span>
                    <input type="tel" value="+38">
                </label>
                <label>
                    <span>Пароль:</span>
                    <input type="password">
                </label>
                <label class="left">
                    <input type="submit" value="Войти">
                </label>
                <div class="right">
                    <a href="#" data-open-window="restoration-profile">Напомнить пароль</a>
                    <a href="#" data-open-window="new-profile">Создать новый профиль</a>
                </div>

                <div class="clearfix"></div>

                <span class="soc">Или войдите, используя социальные сети:</span>
                <? include $yamEgg->incl()."includes/components/widgets/share/soc-default.php"; ?>
            </form>
        </div>
    </div>
</div>