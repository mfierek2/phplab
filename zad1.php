<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Michał Fierek</title>

	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<script src="timer.js"></script>

</head>

<body onload="odliczanie();">

	<div id="container">

		<div class="rectangle">
			<div id="logo">Michał Fierek</div>
			<div id="zegar">12:00:00</div>
			<div style="clear: both;"></div>
		</div>

			<div class="tile53">
				<br /><br />
		<form method="POST" action="">
		<input type="text" name="liczba1" size="10" value="0">
		<select name="znak">
			<option>+</option>
			<option>-</option>
			<option>*</option>
			<option>/</option>
		</select>
		<input type="text" name="liczba2" size="10" value="0">
		<input type="submit" value="Oblicz">
		</form>

		<?php
			error_reporting(0);
			$liczba1 = $_POST['liczba1'];
			$liczba2 = $_POST['liczba2'];
			$znak = $_POST['znak'];
			$wynik = "";
			switch ($znak)
			{
				case "+":
					$wynik = $liczba1+$liczba2;
					break;
				case "-":
					$wynik = $liczba1-$liczba2;
					break;
				case "*":
					$wynik = $liczba1*$liczba2;
					break;
				case "/":
					$wynik = $liczba1/$liczba2;
				break;
			}
		echo '<br/>'.'Wynik: '.$wynik;
		?>
	</div>
</body>
</html>