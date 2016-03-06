<!DOCTYPE html>
<html>
<head>
	<title>Comparateur de prix</title>
	<meta charset="utf-8" />
</head>
<body>

	<h1>Comparateur de prix</h1>

	<?php

	$nom1 = $_POST['nom1'];
	$prix1 = $_POST['prix1'];

	$nom2 = $_POST['nom2'];
	$prix2 = $_POST['prix2'];

	$nom3 = $_POST['nom3'];
	$prix3 = $_POST['prix3'];

	$nom4 = $_POST['nom4'];
	$prix4 = $_POST['prix4'];


	$tab = array (
		$nom1 => $prix1,
		$nom2 => $prix2,
		$nom3 => $prix3,
		$nom4 => $prix4,
		);


	$prixmin = min($tab);
	$prixmax = max($tab);


// PRIX MINI

	if ($prixmin == $prix1)
	{
		echo 'Le produit le moin cher est :' .$nom1. '<br />';
	}

	elseif ($prixmin == $prix2)
	{
		echo 'Le produit le moin cher est :' .$nom2. '<br />';
	}

	elseif ($prixmin == $prix3)
	{
		echo 'Le produit le moin cher est :' .$nom3. '<br />';
	}

	else
	{
		echo 'Le produit le moin cher est :' .$nom4. '<br />';
	}

// PRIX MAX

	if ($prixmax == $prix1)
	{
		echo 'Le produit le plus cher est:' .$nom1. '<br />';
	}

	elseif ($prixmax == $prix2)
	{
		echo 'Le produit le plus cher est :' .$nom2. '<br />';
	}

	elseif ($prixmax == $prix3)
	{
		echo 'Le produit le plus cher est :' .$nom3. '<br />';
	}

	else
	{
		echo 'Le produit le plus cher est :' .$nom4. '<br />';
	}

	?>

</body>
</html>
