<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>

	<form action="Primeiro.php" method="post">
		<label  for="nome">Nome</label>
		<input type="text" name="nome" 
		maxlength="30" placeholder="insira seu nome" autofocus required id="nome">
		<label for="E-mail" name="email"></label>
		<input type="email" name="email"
		maxlength="100" placeholder="insira seu e-mail" required id="email">
		Idade
		<input type="number" name="idade" id="idade">

		<input type="submit" name="enviar">
	</form>

</body>
</html>