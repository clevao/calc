<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">					
	</head>
	<body>

<?php

	$v1 = $v2 = '';
	$op = '+';
	$res = "";

	if(isset($_POST["enviar"])){
		$v1 = $_POST["valor1"];
		$v2 = $_POST["valor2"];
		$op = $_POST["operacao"];
		
		switch($op){
			case "+":
				$res = $v1 + $v2;
				break;
			default:
				$res = "ERRO";
				break;
		}
		
	}
	
	$strRes = '';
	if($res != '')
		$strRes = " = $res";
	
	
	$corpo = '<h1>CALCULADORA<h2>
			<form method="POST">
				<input type="text" name="valor1" value="'.$v1.'" class="inputTexto" style="width: 80px;">
				<input type="hidden" name="enviar" value="true">
				<select name="operacao" class="inputTexto" style="width: 80px;">
					<option value="+">MAIS</option>					
				</select>
				<input type="text" name="valor2" value="'.$v2.'" class="inputTexto" style="width: 80px;">
				'.$strRes.'
				<br><br>
				<input type="submit" name="SALVAR" value="CALCULAR" class="botaoEnviar">
			</form>';
			echo $corpo;
?>
	</body>
</html>
