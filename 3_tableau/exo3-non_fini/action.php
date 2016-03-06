<!DOCTYPE html>
<html>
<head>
	<title>Nombre d'éléments d'un tableau</title>
	<meta charset="utf-8" />
</head>
<body>

	<h1>Nombre d'éléments d'un tableau</h1>

	<?php

	$entier = array ($_POST['element1'], $_POST['element2'],$_POST['element3'], $_POST['element4']);

	if (isset($entier))
	{


		$nombre = count($entier);


		echo 'Il y a ' . $nombre . ' élement dans le tableau';
	}

	?>


</body>
</html>