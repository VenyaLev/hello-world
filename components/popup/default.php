<div class="yam-popup">

	<div class="window style-error" data-window="error">
		<div class="overlay"></div>
		<div class="container"></div>
	</div>

	<div class="window style-success" data-window="success">
		<div class="overlay"></div>
		<div class="container"></div>
	</div>

	<div class="window style-info" data-window="info">
		<div class="overlay"></div>
		<div class="container"></div>
	</div>
	
	<div class="window style-ajax" data-window="ajax-popup">
		<div class="overlay"></div>
		
		<div class="container">
			<span class="close">x</span>
			
			<p class="h">some header</p>
			
			Content loaded dynamicly by progers with AJAX method.
			Any content type may be placed here. 
			<br>
			Best wishes, frontend development team! :)
		</div>
	</div>
</div>

<? include $yamEgg->incl()."includes/components/popup/callback.php"; ?>

<? include $yamEgg->incl()."includes/components/popup/ask-question.php"; ?>

<? include $yamEgg->incl()."includes/components/popup/thank-you.php"; ?>

<? include $yamEgg->incl()."includes/components/popup/notify-me.php"; ?>

<? include $yamEgg->incl()."includes/components/popup/one-click-buy.php"; ?>

<? include $yamEgg->incl()."includes/components/popup/auth-cabinet.php"; ?>