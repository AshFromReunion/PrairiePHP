<!DOCTYPE html>
<html>
<head>
	<title>Tableau ordonné ?</title>
	<meta charset="utf-8" />
</head>
<body>

	<h1>Tableau ordonné ?</h1>

	<?php


	if ($_POST['nombre1'] < $_POST['nombre2'] && $_POST['nombre3'] < $_POST['nombre4'])

	{
		echo "Vrai";
	}


	else

	{
		echo "Faux";
	}

	?>

</body>
</html>