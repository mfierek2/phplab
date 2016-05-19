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
		<div class="tile53">
			<?php
				if(!isset($_COOKIE['visits'])) {
					error_reporting(0);
					echo '<span style="font-size: 26px;">'.'Jesteś odwiedzającym nr '.$counterVal .'</span>';
					setcookie('visits','diskfdsljfclksmi',time()+86400);
					$counter_name = "counter.txt";
					if (!file_exists($counter_name)) {
						$f = fopen($counter_name, "w");
						fwrite($f,"0");
						fclose($f);
					}

					$f = fopen($counter_name,"r");
					$counterVal = fread($f, filesize($counter_name));
					fclose($f);
					$counterVal++;
					$f = fopen($counter_name, "w");
					fwrite($f, $counterVal);
					fclose($f); 
				}
				else
					echo "Dziś już tu byłeś"
			?>
		</div>
	</div>
</body>
</html>