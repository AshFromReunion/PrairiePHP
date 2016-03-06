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
	$plaque = $_POST['plaque'];

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

	<br />


	<?php


	if(preg_match ('#[A-Z]{2} [0-9]{3} [A-Z]{2}#i' , $plaque))

	{
		echo 'Plaque d\'immatriculation valide';

	}


	else

		echo 'Plaque d\'immatriculation invalide';

	?>

</body>
</html>