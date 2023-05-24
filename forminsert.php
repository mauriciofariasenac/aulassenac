<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário de Entrada de Dados</title>
</head>
<body>
	<h1>Formulário de Entrada de Dados</h1>
	<form method="post" action="insert.php">
		<label for="id_regiao">ID da Região:</label>
		<input type="text" id="idregiao" name="idregiao"><br><br>

		<label for="desc_regiao">Descrição da Região:</label>
		<input type="text" id="descricaoregiao" name="descricaoregiao"><br><br>

		<input type="submit" value="Enviar">
	</form>
   
</body>
</html>