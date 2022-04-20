<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Salário mensal</title>
</head>
<body>
	<form method="POST">
			Horas: <input type="number" name="horas">
			<br>
			Valor por hora: <input type="number" name="valor">
			<br>
			<input type="submit" name="enviar" value="Enviar">
	</form>
	
	<?php
		if (isset($_POST['enviar'])){
			$horas = $_POST['horas'];
			$valor_hora = $_POST['valor'];

			if(!empty($horas) && !empty($valor_hora)){
				if(is_numeric($horas) && is_numeric($valor_hora)){
					
					$resultado = $valor_hora * $horas;
					echo("Salário mensal: $resultado");
				} else{
					echo("apenas numeros permitidos");
			}
			 
			
		}
	}

	?>
</body>
</html>