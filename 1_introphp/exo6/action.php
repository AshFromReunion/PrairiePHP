<!DOCTYPE html>
<html>
<head>
	<title>Le stationnement alternatif</title>
	<meta charset="utf-8" />
</head>
<body>

	<h1>Le stationnement alternatif</h1>

	<?php

	$date = $_POST['date'];
	$maison = $_POST['maison'];

	if ($date <= 15 AND $maison %2)
	{
		echo 'Vous etes bien garé';
	}

	elseif ($date >= 15 AND $maison % 2 == 0)
	{
		echo 'Vous etes bien garé';
	}

	else
		echo 'Vous etes mal garé';


	if ($date <= 0 OR $date >= 31 OR $maison <= 0)
	{
		echo ' - Date ou numéro de maison invalide';
	}

	?>

</body>
</html>