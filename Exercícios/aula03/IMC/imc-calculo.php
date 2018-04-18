<?php
if(!empty($_POST)){
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];

	$imc = $peso / ($altura * $altura);

	switch ($imc) {
		case ($imc < 17):
			echo 'Muito abaixo do peso';
			break;
		case ($imc >= 17 && $imc < 18.5):
			echo 'Abaixo do peso';
			break;
		case ($imc >= 18.5 && $imc < 25):
			echo 'Peso normal';
			break;
		case ($imc >= 25 && $imc < 30):
			echo 'Acima do peso';
			break;
		case ($imc >= 30 && $imc < 35):
			echo 'Obesidade I';
			break;
		case ($imc >= 35 && $imc < 40):
			echo 'Obesidade II (severa)';
			break;
		case ($imc >= 40):
			echo 'Obesidade III (mórbida)';
			break;
	}
}