<!DOCTYPE html>
<html>
<head>
	<title>Maximum et minimum</title>
	<meta charset="utf-8" />
</head>
<body>

	<h1>Maximum et minimum</h1>

	Le plus petit nombre :

	<?php

	echo min($_POST['entier1'], $_POST['entier2'], $_POST['entier3'], $_POST['entier4'], $_POST['entier5'], $_POST['entier6'] );
	?>


	<br />


	Le plus grand nombre 

	<?php

	echo max($_POST['entier1'], $_POST['entier2'], $_POST['entier3'], $_POST['entier4'], $_POST['entier5'], $_POST['entier6'] );

	?>




</body>
</html>