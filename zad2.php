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
				<div class = "input">
				<h3>Nowa osoba:</h3>
				  <form>
				  <input type="text" name="nowy">
				  <?php
					error_reporting(0);
				  if($_REQUEST['ile']!=NULL)
				  {
					for($i=0;$i<=$_REQUEST['ile'];$i++)
					{
						if($i< $_REQUEST['ile'] )
						{
							$a=$_REQUEST['imie'.$i];
							echo '<input type="hidden" name="imie'.$i.'" value="'.$a.'" />'."\n";
						}else
						{
							echo '<input type="hidden" name="imie'.$i.'" value="'.$_REQUEST['nowy'].'" />'."\n";
						}
					}
				 }
				?>
				</div>
				  <input type ="hidden" name="ile" value="<?php if($_REQUEST['ile']==NULL){ echo "0";}
				  if($_REQUEST['ile']!=NULL){ $a= $_REQUEST['ile']; echo $a+1;}?>">
				 </form>
				<div class = "list">
				<?php
						error_reporting(0);
						 if ($_REQUEST['ile'] != NULL)
						 {
							for ($i = 0; $i <= $_REQUEST['ile']; $i++)
							{
								if($i< $_REQUEST['ile'] )
								{
									$a= $_REQUEST['imie'.$i] ;
									echo $i+1 .". ".$a."<br>";
								}else
								{
									echo $i+1 .". ".$_REQUEST['nowy']."<br>" ;
								}
							} 
						}
				?>
				</div>
			</div>
	</div>
</body>
</html>