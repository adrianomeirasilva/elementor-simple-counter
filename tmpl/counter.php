<script>
	function startTimer(duration, display) {
		var timer = duration, minutes, seconds;
		setInterval(function () {
			minutes = parseInt(timer / 60, 10);
			seconds = parseInt(timer % 60, 10);

			minutes = minutes < 10 ? "0" + minutes : minutes;
			seconds = seconds < 10 ? "0" + seconds : seconds;

			display.textContent = minutes + ':' + seconds;

			if (--timer < 0) {
				timer = duration;
			}
		}, 1000);
	}
	window.onload = function () {
		var totalMinutes = 60 * <?php echo $settings['tempo']; ?>,
			display = document.querySelector('#time');
		startTimer(totalMinutes, display);
	};	
</script>
<div class="countador-oferta" >
	<div class="contador" >
		<span id="time" class="minuto"><?php echo $settings['tempo']; ?>:00</span>
		<span class="texto"><?php echo $settings['tempo_texto'] ?></span>
	</div>
</div>