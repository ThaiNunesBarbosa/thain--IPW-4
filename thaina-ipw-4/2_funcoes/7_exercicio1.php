<?php
	function potencia($base, $expoente) {
			return ' a potencia da base x ' . $base . ' elevado ao expoente ' . $expoente . ' é: ' .pow($base, $expoente);
	}
	echo potencia (3, 6);
	echo '<br>';
	echo potencia (5, 7);
	echo '<br>';
	echo potencia (2, 4);

?>