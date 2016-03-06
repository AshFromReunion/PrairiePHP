<!DOCTYPE html>
<html>
<head>
	<title>Valider une date</title>
	<meta charset="utf-8" />
</head>
<body>

	<h1>Valider une date</h1>

	<?php

	$date = $_POST['date'];

	if (preg_match('#^([0-9]{2})([/-])([0-9]{2})\2([0-9]{4})$#', $date, $m) == 1 AND checkdate($m[3], $m[1], $m[4]))

	{
		echo "Date d'anniversaire validé";
	}

	else
	{
		echo "Date d'anniversaire non validé";
	}

	?>

</body>
</html>