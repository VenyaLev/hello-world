<div class="page-personal-question">
	
	<form action="/" method="get">
		<div class="row">
			<div class="cols s_24 s___6">
				<div class="label"><span>Представьтесь пожалуйста:</span></div>
			</div>
			
			<div class="cols s_24 s___18 l__15">
				<label class="click">
					<input type="text" placeholder="Фамилия Имя Отчество" />
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="cols s_24 s___6">
				<div class="label"><span>ФИО врача:</span></div>
			</div>
			
			<div class="cols s_24 s___18 l__15">
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
				<div class="label"><span>Ваш вопрос:</span></div>
			</div>
			
			<div class="cols s_24 s___18 l__15">
				<label class="click">
					<textarea placeholder="Суть вопроса..."></textarea>
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="cols s_24 s___9 s___offset-15 l__7 l__offset-14">
				<label class="click">
					<input type="submit" value="сохранить" />
				</label>
			</div>
		</div>
	</form>
	
</div>