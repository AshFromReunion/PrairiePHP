<!DOCTYPE html>
<html>
<head>
	<title>Somme</title>
	<meta charset="utf-8" />
</head>
<body>

	<h1>Somme</h1>

	<?php

	$nombre1 = $_POST['entier1'];
	$nombre2 = $_POST['entier2'];
	$nombre3 = $_POST['entier3'];
	$nombre4 = $_POST['entier4'];

	?>

	<p>La somme du tableau est égale à :</p>

	<?php

	echo  $nombre1 + $nombre2 + $nombre3 + $nombre4 ;

	?>


</body>
</html>