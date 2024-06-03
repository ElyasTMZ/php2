<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<title>Formulário</title>
</head>
<body>
	<form action="primeiro.php" method="post">
		<label for="nome">Nome</label>
		<input type="text" name="nome" maxlength="30" placeholder="Insira seu nome" autofocus required id="nome" autocomplete="true"><br>
		<label for="email">E-mail</label>
		<input type="email" name="email" maxlength="100" placeholder="Insira seu e-mail" required id="email" autocomplete="true"><br>
		<label for="idade">Idade</label>
		<input type="number" name="idade" required id="idade" placeholder="0" ><br>

		sexo;<br>
		<input type="radio" name="sexo" value="fem">Feminino<br>
		<input type="radio" name="sexo" value="masc">Masculino<br><br>

		Escolha;<br>
		<input type="checkbox" name="livro">Livro<br>
		<input type="checkbox" name="livro">estudar<br>
		<input type="checkbox" name="livro">brincar<br>
		<input type="checkbox" name="livro">jogar
		<br>

		animais
		<select name="animais">
			<option>elefante</option>
			<option>macaco</option>
			<option>urubu</option>
			<option>cat</option>
		</select><br>

		abrir arquivo: <input type="file" name="abrir arquivo">

		<input type="submit" name="enviar" value="Enviar">

		<input type="reset" name="reset" value="Limpar">

	</form>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>
</html>