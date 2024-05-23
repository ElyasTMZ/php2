<?php 
$nums = array (-8, -2, -8, -9, 3, 4,9, 5, 10, 6);

$positivo = 0;
$negativo = 0;
$impar = 0;
$par = 0;
foreach ($nums as $num){
	
	if($num >= 0){
		$positivo ++;
	}else{
		$negativo++;
	}

	if($num % 2 == 0){
		$par ++;
	}else{
		$impar++;
	}
}
echo ("a quantidade de numero positivo é: $positivo, e a de negativo é $negativo". "<br/>");
echo ("a quantidade de numero par é: $par, e a de impar é $impar". "<br/>");




 ?>