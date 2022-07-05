<?php
	include('../sprachen.php');
	if (isset($_GET['wahl']) and ($_GET['wahl'] >= 0) and ($_GET['wahl'] <= 3))
	{
		$i = $_GET['wahl'];
	}
	else
	{
		$i = 0;
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
		<a href="../">Home</a>
		<a href="../Produkt/">Unser Produkt</a>
		<a href="../Sicherheit/">Sicherheit</a>
		<a href="../Team/">Team</a>
		<a href="../Kontakt/">Kontakt</a>
		<a href="../Impressum/" style=background-color:green;>Impressum</a>
		<form method="get" class="form-inline"> 
		<select name="wahl" id="wahl">
			<option value="0" <?php if ($i==0) {echo "selected";}?>>Deutsch</option>
			<option value="1" <?php if ($i==1) {echo "selected";}?>>English</option>
			<option value="2" <?php if ($i==2) {echo "selected";}?>>Français</option>
			<option value="3" <?php if ($i==3) {echo "selected";}?>>Español</option>
		</select>
		
		<a>
		<button type="submit">Select</button>	
</a>
</form>
	</div>
	<a> <center><br> <br> <br> Impressum: SafeSign GmbH <br> Hohe Straße 137 <br> 01187 Dresden <br> Germany <br> Registernummer: HS5398GN <br> Umsatzsteueridentifikationsnummer: DE917503721 <br> info@safesign.de <br> <br> SafeSign.de</center></a>
</body>

<!-- Gesamtes Programm von Felix Ritter -->