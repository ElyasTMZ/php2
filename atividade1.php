<?php 
$notas = array (8, 2, 8, 9, 3, 4,9, 5, 10, 6);
$alunos = array ("Maria" ,"Zeca", "Pedro","Paulo" ,"Alessandro","Zé" ,"Antonio","Thiago" ,"Elyas" ,"Paula");

$temp = 0;
$soma = 0;
$maiornota = 0;

foreach ($notas as $nota){
	
	if($nota > $maiornota){
		$temp = $nota;
		$nota = $maiornota;
		$maiornota = $temp;
}
$soma = $nota + $nota / 10;
}
echo ($maiornota. "<br/>");
echo ("a media das notas é: $soma");


 ?>

