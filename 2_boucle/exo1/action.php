<!DOCTYPE html>
<html>
<head>
	<title>Afficher le n premiers chiffres</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="couleur.css" />
</head>
<body>

	<h1>Afficher le n premiers chiffres</h1>

	<?php
	$nombre1 = $_POST['nombre1'];
	$nombre2 = $_POST['nombre2'];

	while ($nombre1 <= $nombre2)

	{
		echo '<br />';	

		if($nombre1%2 == 0)
		{
			echo '<span style="color : blue;"> '.$nombre1.'</span>';
		}
		else
		{
			echo '<span style="color : orange;"> '.$nombre1.'</span>';
		}


		$nombre1++;




		if (gmp_perfect_square($nombre1))
		{
			echo '<span style="font-weight: bold;" />';
		}

		else
		{
			echo '<span style="font-weight: normal;" />';
		}		

	}

	?>

</body>
</html>