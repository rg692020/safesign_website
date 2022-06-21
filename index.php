<?php
	include('sprachen.php');
	if (isset($_GET['wahl']) and ($_GET['wahl'] >= 0) and ($_GET['wahl'] <= 3))
	{
		$i = $_GET['wahl'];
	}
	else
	{
		$i = 3;
	}

?>


<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>SafeSign</title>
	
	<link href="style.css" type="text/css" rel="stylesheet" >
</head>
<body>
	<!-- This is the outline for the navbar, used to navigate between different parts of the website -->
	<div class="topnav">
		<a href="" style=background-color: green;>Home</a>
		<a href="./Produkt/"><?php echo $sprache[$i]['Produkt']?></a>
		<a href="./Sicherheit/">Sicherheit</a>
		<a href="./Team/">Team</a>
		<a href="./Kontakt/"><?php echo $sprache[$i]['Kontakt']?></a>
		<a href="./Impressum/"><?php echo $sprache[$i]['Impressum']?></a>
		<a style=text-align: right;>Change language</a>
	</div>
	<a> Hauptseite </a>
</body>
