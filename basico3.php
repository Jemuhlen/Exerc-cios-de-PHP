<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Peso ideal</title>
</head>
<body>
	<form method="POST">
			Altura: <input type="number" name="altura" step="0.01">
			<br>
			Sexo: 
			<select name="sexo">
				<option value="homem">Homem</option>
				<option value="mulher" >Mulher</option>
			</select>
			<input type="submit" name="enviar" value="Enviar">

	</form>


	<?php
		if (isset($_POST['enviar'])){
			$altura = $_POST['altura'];

			if(is_numeric($altura)){
				$sexo = $_POST['sexo'];
					
				if ($sexo == "homem"){
					$peso_ideal = (72.7 * $altura) - 58;
					echo("O peso ideal é $peso_ideal");
				}

				else if ($sexo == "mulher"){
					$peso_ideal = (62.1 * $altura) - 44.7;
					echo("O peso ideal é $peso_ideal");
				}	
			} 	
		}

	?>
</body>
</html>
