<!DOCTYPE html>
<html>
<head>
	<title>Le compte en banque</title>
	<meta charset="utf-8" />
</head>
<body>


	<h1>Le compte en banque</h1>


	<?php

	$compte = $_POST['nombre'];

	if ($compte < 0)
	{
		echo 'Votre situation : Déficitaire';
	}

	elseif ($compte == 0)
	{
		echo 'Votre situation : En équilibre';
	}

	else
	{
		echo 'Votre situation : Crédité';
	}

	?>

</body>
</html>