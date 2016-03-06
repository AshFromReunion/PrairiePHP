<!DOCTYPE html>
<html>
<head>
	<title>Plus grand écart</title>
	<meta charset="utf-8" />
</head>
<body>

	<h1>Plus grand écart</h1>


	<?php

	$nombre1 = $_POST['nombre1'];
	$nombre2 = $_POST['nombre2'];
	$nombre3 = $_POST['nombre3'];
	$nombre4 = $_POST['nombre4'];

	$ecart1 = $nombre2 - $nombre1 ;

	$ecart2 = $nombre3 - $nombre2;

	$ecart3 = $nombre4 - $nombre3 ;

	?>


	<p>

		L'écart le plus grand est de : <?php echo max ($ecart1 ,$ecart2 ,$ecart3); ?>

	</p>


</body>
</html>