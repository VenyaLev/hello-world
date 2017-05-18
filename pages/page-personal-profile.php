<div class="page-personal-profile">
	
	<form action="/" method="get">
		<div class="row">
			<div class="cols s_24 s___6">
				<div class="label"><span>ФИО:</span></div>
			</div>
			
			<div class="cols s_24 s___18 l__15">
				<label class="click">
					<input type="text" placeholder="Фамилия Имя Отчество" />
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="cols s_24 s___6">
				<div class="label"><span>Сфера деятельности:</span></div>
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
                <div class="label"><span>Город:</span></div>
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
                <hr>
            </div>
        </div>



		
		<div class="row">
			<div class="cols s_24 s___6">
				<div class="label"><span>Дополнительные заметки:</span></div>
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
					<input type="submit" value="сохранить" />
				</label>
			</div>
		</div>
	</form>

    <h5>Сотрудники компании</h5>
        <div class="header-block-employees show-m_up">
            <div class="row">
                <div class="cols s_21 m_22 l_23">
                    <div class="row">
                        <div class="cols s_24 m_8 l_8">
                            <span class="fn">
                                <span>Фамилия </span>
                                <span>Имя</span>
                            </span>

                        </div>
                        <div class="cols s_24 m_8 l_8">
                            <span>E-mail </span>
                        </div>

                        <div class="cols s_24 m_8 l_8">
                            <span>Программа обслужвания</span>
                        </div>
                    </div>
                </div>

                <div class="cols s_3 m_2 l_1  s_align-start s__align-center">
                    <div class="row collapse">
                        <div class="cols s_24" >
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-employees">
            <div class="row">
                <div class="cols s_21 m_22 l_23">
                    <div class="row">
                        <div class="cols s_24 m_8 l_8">
                            <span class="surname txt">Стрельбицкая </span>
                            <span class="name txt">Тамара</span>
                        </div>
                        <div class="cols s_24 m_8 l_8">
                            <a href="#" class="mail txt">kakawekmnogozddfgh.hdhdftghes@com.ua</a>
                        </div>

                        <div class="cols s_24 m_8 l_8">
                            <span class="txt">День здоровья</span>
                        </div>
                    </div>
                </div>

                <div class="cols s_3 m_2 l_1 s_align-start s__align-center m_align-start">
                    <div class="row collapse">
                        <div class="cols s_24" >
                            <a href="#" class="delete"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-employees">
            <div class="row">
                <div class="cols s_21 m_22 l_23">
                    <div class="row">
                        <div class="cols s_24 m_8 l_8">
                            <span class="surname txt">Стрельбицкая</span>
                            <span class="name txt">Тамара</span>
                        </div>
                        <div class="cols s_24 m_8 l_8">
                            <a href="#" class="mail txt">pisemnetvoobshe@com.ua</a>
                        </div>

                        <div class="cols s_24 m_8 l_8">
                            <span class="txt">День здоровья</span>
                        </div>
                    </div>
                </div>

                <div class="cols s_3 m_2 l_1 s_align-start s__align-center m_align-start">
                    <div class="row collapse">
                        <div class="cols s_24" >
                            <a href="#" class="delete"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-employees">
            <div class="row">
                <div class="cols s_21 m_22 l_23">
                    <div class="row">
                        <div class="cols s_24 m_8 l_8">
                            <span class="surname txt">Стрельбицкая </span>
                            <span class="name txt">Тамара-Виктория-Адель</span>
                        </div>
                        <div class="cols s_24 m_8 l_8">
                            <a href="#" class="mail txt">pisemnetvoobshe@com.ua</a>
                        </div>

                        <div class="cols s_24 m_8 l_8">
                            <span class="txt">День здоровья</span>
                        </div>
                    </div>
                </div>

                <div class="cols s_3 m_2 l_1 s_align-start s__align-center m_align-start">
                    <div class="row collapse">
                        <div class="cols s_24" >
                            <a href="#" class="delete"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="add-employees"><i class="fa fa-plus-circle"></i>Добавить сотрудника</a>
	
</div>