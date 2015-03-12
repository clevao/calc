<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">					
	</head>
	<body>

<?php
	
	
	$corpo = '<h1>CALCULADORA<h2>
			<form method="POST">
				<input type="text" name="valor1" value="" class="inputTexto" style="width: 80px;">
				<input type="hidden" name="enviar" value="true">
				<select name="operacao" class="inputTexto" style="width: 40px;">
					<option value="+">SUM</option>
					<option value="-">SUB</option>
					<option value="*">MULT</option>
					<option value="/">DIV</option>
				</select>
				<input type="text" name="valor2" value="" class="inputTexto" style="width: 80px;">
				<br><br>
				<input type="submit" name="SALVAR" value="CALCULAR" class="botaoEnviar">
			</form>';
			echo $corpo;
?>
	</body>
</html>
