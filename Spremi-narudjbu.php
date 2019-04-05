<!DOCTYPE html>
<html>
<head>
	<title>Spremi Adresu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Spremljena Narudžba:</h1>

	<?php

	$ime = $_POST['ime'];
	$adresa = $_POST['adresa'];
	$menu = $_POST['menu'];
	$naplata = $_POST['naplata'];

	echo "Ime: $ime <br>";
	echo "Adresa: $adresa <br>"; 
	echo "Menu: $menu <br>";
	echo "Naplata: $naplata <br>";

	// otvaramo datoteku
	$datoteka = fopen("narudba.txt" , "a");

	// zapisujemo u datoteku
	fwrite($datoteka , "\n$ime\n$adresa\n$menu\n$naplata");

	//zatvaramo datoteku
	fclose($datoteka);



	?>

<br>

<a href="menu.php">Unesi novu narudžbu</a>
<a href="Provjeri-narudjbu.php">Provjeri narudžbu</a>

</body>
</html>