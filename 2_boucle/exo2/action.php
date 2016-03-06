<!DOCTYPE html>
<html>
<head>
	<title>Maximum de nombres</title>
	<meta charset="utf-8" />
</head>
<body>

	<h1>Maximum de nombres</h1>

	<p>Le nombre le plus grand est :

		<?php

		echo max($_POST['nombre1'], $_POST['nombre2'], $_POST['nombre3'], $_POST['nombre4'], $_POST['nombre5'], $_POST['nombre6'], $_POST['nombre7'], $_POST['nombre8'], $_POST['nombre9'], $_POST['nombre10']);	

		?>
	</p>

</body>
</html>