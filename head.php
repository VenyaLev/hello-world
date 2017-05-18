<? include("yamEgg.php"); ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- Remove Tap Highlight on Windows Phone IE -->
<meta name="msapplication-tap-highlight" content="no"/>

<style>
<? include $yamEgg->incl()."styles/styles.php"; echo "\n";?>
</style>

<script>
window.allScriptsAreLoaded = false;

function EXE(f) {
	var a = setInterval(function() {
		if(window.allScriptsAreLoaded) {
			clearInterval(a);
			f();
		}
	}, 300);
}
</script>
