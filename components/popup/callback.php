<div class="yam-popup">
	<div class="window style-callback" data-window="callback">
		<div class="overlay"></div>
		<div class="container">
		
			<span class="close"></span>
			
			<p class="h">Связаться с нами</p>
			
			<form action="/" method="get">
				
				<div class="label">имя <i>*</i></div>
				<label data-yam-validator="text">
					<input type="text" required placeholder="text">
					<span class="message invalid">Например: Валера</span>
					<span class="message required">Введите имя</span>
				</label>
				
				<div class="label">телефон <i>*</i></div>
				<label data-yam-validator="phone">
					<input type="tel" required placeholder="tel">
					<span class="message invalid">Например: +38 099 999 99 99</span>
					<span class="message required">Введите телефон</span>
				</label>
				
				<label>
					<input type="submit" value="отправить">
				</label>
			</form>
		</div>
	</div>
</div>