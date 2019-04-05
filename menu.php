<!DOCTYPE html>
<html>
<head>
	<title>Adresar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="wrapper">

	<h1>KEBAB BAR</h1>

	<form method="post" action="Spremi-narudjbu.php">
		
		Ime:<br>
		<input type="text" name="ime">
		<br><br>

		Adresa:<br>
		<textarea name="adresa"></textarea>
		<br><br>

		Menu:<br>
		<select name="menu">
			<option>Kebab pileći</option>
			<option>Kebab juneći</option>
			<option>Hamburger</option>
			<option>Cheeseburger</option>
			<option>Šunka sir</option>
			<option>Kulen sir</option>
			<option>Big fresh</option>

		</select>
		<br><br>

		Način plaćanja:
		<select name="naplata">
			<option>Kartica</option>
			<option>Gotovina</option>
		</select>

		<br>
		<br>
		<input type="submit" name="Spremi">
		<input type="reset" name="Odustani">

	</form>

</div>

</body>
</html>