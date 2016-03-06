<!DOCTYPE html>
<html>
<head>
	<title>Calcul du panier</title>
	<meta charset="utf-8" />
</head>
<body>

	<h1>Calcul du panier</h1>

	<form method="post" action="action.php">

<h1>Veuillez choisir un fruit</h1>

<!-- CHOIX 1 -->

		<input type="checkbox" name="choix1" value="pomme" />Pomme

		<p>
			Prix hors taxe: <input type="float" name="prixht1" />
		</p>

		<p>
			Taux de TVA: <input type="float" name="tauxdetva1" />
		</p>

		<p>
			Quantité: <input type="number" name="quantite1" />
		</p>

<!-- CHOIX 2 -->

		<input type="checkbox" name="choix2" value="peche"/>Peche

		<p>
			Prix hors taxe: <input type="float" name="prixht2" />
		</p>

		<p>
			Taux de TVA: <input type="float" name="tauxdetva2" />
		</p>

		<p>
			Quantité: <input type="number" name="quantite2" />
		</p>

<!-- CHOIX 3 -->

		<input type="checkbox" name="choix3" value="poire"/>Poire


		<p>
			Prix hors taxe: <input type="float" name="prixht3" />
		</p>

		<p>
			Taux de TVA: <input type="float" name="tauxdetva3" />
		</p>

		<p>
			Quantité: <input type="number" name="quantite3" />
		</p>

<!-- VALIDER 1 -->

		<input type="submit" value="Valider" />

	</form>

</body>
</html>