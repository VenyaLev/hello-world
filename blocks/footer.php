<footer data-watch-scroll>
	<div class="row">
		<div class="cols s_24 m_12 l_8">
			<div class="footerContWr">
				<div class="footer-logo">
					<div class="yam-include-area">
						<? include $yamEgg->incl()."includes/components/include-areas/footer-logo.php"; ?>
					</div>
				</div>
				<div class="footerContacts">
					<p class="footerTitle">КОНТАКТЫ:</p>
					<p class="footerAdr">Киев,  ул. Длиннаяуличная 25, <br>
						офис 555</p>
					<a class="footerTelAndMail" href="tel:0447088577">+38(044) 70-88-577</a>
					<a class="footerTelAndMail padBottom" href="mailto:biologichouse@com.ua">biologichouse@com.ua</a>
				</div>
			</div>
		</div>
		<div class="cols s_24 m_12 l_8">
			<div class="footerContactForm">
				<p class="ContFormTitle">Расчитать стоимость</p>
				<div class="secondText">Узнайте стоимость проекта отправив заявку нам на просчет.</div>
				<div class="form">
					<div class="row">
						<div class="cols s_24 l_16">
							<label data-yam-validator="text">
								<input type="text" required placeholder="Имя">
								<span class="message invalid">Например: Валера</span>
								<span class="message required">Введите имя</span>
							</label>
							<label data-yam-validator="phone">
								<input type="tel" required placeholder="Тел">
								<span class="message invalid">Например: +38 099 999 99 99</span>
								<span class="message required">Введите телефон</span>
							</label>
						</div>
						<div class="cols m_8 show-l_up">
							<input type="submit" value="отправить">
						</div>
						<div class="cols s_24">
							<label>
								<textarea placeholder="Сообщение"></textarea>
							</label>
						</div>
						<div class="cols s_24 hide-l_up">
							<input type="submit" value="отправить">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="cols s_24 l_8">
			<div class="partnerWr">
				<p class="footerTitle">партнеры:</p>
				<div class="imgContainer">
					<a href="#"> <img src="<?=$yamEgg->img();?>images/partner1.png" alt=""></a>
					<a href="#"> <img src="<?=$yamEgg->img();?>images/partner2.png" alt=""></a>
				</div>
				<p class="footerTitle smallPad">Мы в соц сетях:</p>
				<? include $yamEgg->incl()."includes/components/widgets/share/default.php"; ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="cols s_24">
			<? include $yamEgg->incl()."includes/components/navigation/menu.bottom/default.php"; ?>
		</div>
	</div>
	<div class="row">
		<div class="footer-copyright">
			<div class="yam-include-area">
				<? include $yamEgg->incl()."includes/components/include-areas/footer-copyright.php"; ?>
			</div>
		</div>
	</div>
</footer>