<!DOCTYPE html>
<html>
<head>
	<title>Numérologie</title>
	<meta charset="utf-8" />
</head>
<body>

<h1>Numérologie</h1>

	<?php

// $A = 1;
// $B = 2;
// $C = 3;
// $D = 4;
// $E = 5;
// $F = 6;
// $G = 7;
// $H = 8;
// $I = 9;
// $J = 10;
// $K = 11;
// $L = 12;
// $M = 13;
// $N = 14;
// $O = 15;
// $P = 16;
// $Q = 17;
// $R = 18;
// $S = 19;
// $T = 20;
// $U = 21;
// $V = 22;
// $W = 23;
// $X = 24;
// $Y = 25;
// $Z = 27;

	function convertir( $texte )
	{

		$tableau = array (

			'A' => '1',
			'B' => '2',
			'C' => '3',
			'D' => '4',
			'E' => '5',
			'F' => '6',
			'G' => '7',
			'H' => '8',
			'I' => '9',
			'J' => '10',
			'K' => '11',
			'L' => '12',
			'M' => '13',
			'N' => '14',
			'O' => '15',
			'P' => '16',
			'Q' => '17',
			'R' => '18',
			'S' => '19',
			'T' => '20',
			'U' => '21',
			'V' => '22',
			'W' => '23',
			'X' => '24',
			'Y' => '25',
			'Z' => '26',

			);

		$texte = strtr("$texte", $tableau);
		return $texte;
	}


	$nom = $_POST['nom'];
	echo convertir( $nom );

	?>

	<br />

	<?php

	$prenom = $_POST['prenom'];
	echo convertir( $prenom );


	?>

</body>
</html>