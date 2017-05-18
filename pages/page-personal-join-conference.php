<div class="page-make-service page-personal-join-conference">
	
	<form action="/" method="get">
		<div class="row">
			<div class="cols s_24 s___6">
				<div class="label"><span>Имя:</span></div>
			</div>
			
			<div class="cols s_24 s___18 l__15">
				<label class="click">
					<input type="text" placeholder="" />
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="cols s_24 s___6">
				<div class="label"><span>Телефон:</span></div>
			</div>
			
			<div class="cols s_24 s___18 l__15">
				<label data-yam-validator="^(\+)?(\s)?(\d*\s?){7,}$" class="click">
					<input type="tel" required placeholder="+38">
					<span class="message invalid">Например: +38 099 999 99 99</span>
					<span class="message required">Введите телефон</span>
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="cols s_24 s___6">
				<div class="label"><span>E-Mail:</span></div>
			</div>
			
			<div class="cols s_24 s___18 l__15">
				<label data-yam-validator="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$" class="click">
					<input required type="email" placeholder="e-mail@host.com">
					<span class="message invalid">Например: valera@host.com</span>
					<span class="message required">Введите e-mail</span>
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="cols s_24 s___6">
				<div class="label"><span>Сообщение:</span></div>
			</div>
			
			<div class="cols s_24 s___18 l__15">
				<label class="click">
					<textarea placeholder=""></textarea>
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="cols s_24 s___9 s___offset-15 l__7 l__offset-14">
				<label class="click">
					<input type="submit" value="Отправить" />
				</label>
			</div>
		</div>
	</form>
	
</div>