<!DOCTYPE html>
<html>
<head>
	<title>Calcul du panier</title>
	<meta charset="utf-8" />
</head>
	<body>

	<h1>Calcul du panier</h1>

<!-- CHOIX 1 -->

		<?php

			$prix_hors_taxe1 = $_POST['prixht1'];
			$tva1 = $_POST['tauxdetva1'];
			$quantite1 = $_POST['quantite1'];

		?>

		<p>

			Bonjour, pour le nombre de <?php

			if (isset($_POST['choix1'])) {

			 echo $_POST['choix1']; } 

			 ?> 

			 choisis le prix est de :


			<?php 

			if(isset($_POST['prixht1'])) {

			echo $prix_hors_taxe1 * ( 1 + $tva1 / 100) * $quantite1; } 

			?> €

		</p>

<!-- CHOIX 2 -->

		<?php

			$prix_hors_taxe2 = $_POST['prixht2'];
			$tva2 = $_POST['tauxdetva2'];
			$quantite2 = $_POST['quantite2'];

		?>

		<p>

			Bonjour, pour le nombre de <?php

			if (isset($_POST['choix2'])) {

			 echo $_POST['choix2']; } 

			 ?> 

			 choisis le prix est de :


			<?php 

			if(isset($_POST['prixht2'])) {

			echo $prix_hors_taxe2 * ( 1 + $tva2 / 100) * $quantite2; } 

			?> €

		</p>

<!-- CHOIX 3 -->

		<?php

			$prix_hors_taxe3 = $_POST['prixht3'];
			$tva3 = $_POST['tauxdetva3'];
			$quantite3 = $_POST['quantite3'];

		?>

		<p>

			Bonjour, pour le nombre de <?php

			if (isset($_POST['choix3'])) {

			 echo $_POST['choix3']; } 

			 ?> 

			 choisis le prix est de :


			<?php 

			if(isset($_POST['prixht3'])) {

			echo $prix_hors_taxe3 * ( 1 + $tva3 / 100) * $quantite3; } 

			?> €

		</p>

<!-- TOTAL -->

		<p>
			Le prix total du panier est de : <?php echo ($prix_hors_taxe1 * ( 1 + $tva1 / 100) * $quantite1) + ($prix_hors_taxe2 * ( 1 + $tva2 / 100) * $quantite2) + ($prix_hors_taxe3 * ( 1 + $tva3 / 100) * $quantite3); ?> €
		</p>

	</body>
</html>