<?php 
$nome = array("maria", "joao", "fernando", "pedro", "laercio", "fabio", "antonio", "elyas", "nove", "dez");
$nota = array(7, 7, 7, 8, 9, 8, 6, 10, 5, 8);
$soma = array_sum($nota);
$bign = 10;

echo("a media das notas é:".$soma /10.);

function notamaior($nota, $bign){
	$maior = 0;
	if ($nota > $bign ) {
			
			$maior = $nota;
			$nota = $bign;
			$bign = $maior; 
		}

	return $nota;
}

echo($nota)
 ?>
