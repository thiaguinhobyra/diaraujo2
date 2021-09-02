<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>
	<?php
		//string
		$nome = 'jorge sant ana';
		//int
		$idade = 35;
		//float
		$peso = 75.4;
		//boolean
		$fumante = true; //(true = 1) ou (false = vazio)
		// logica
		$idade = 36;
		// operador .
		echo 'ola ' . $nome . ', idade ' . $idade . ', peso ' . $peso . ' fumante ' . $fumante;
		// aspas duplas
		echo '<br />';

		echo "Ola $nome";
		echo "sua $idade";
		echo "seu $peso"
	?>
</body>
</html>