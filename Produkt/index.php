<?php
	include('../sprachen.php');
	include("inhalt.php");
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
		<a href="../Produkt/" style=background-color:green;><?php echo $sprache[$i]['Produkt']?></a>
		<a href="../Sicherheit/"><?php echo $sprache[$i]['Sicherheit']?></a>
		<a href="../Team/">Team</a>
		<a href="../Kontakt/"><?php echo $sprache[$i]['Kontakt']?></a>
		<a href="../Impressum/"><?php echo $sprache[$i]['Impressum']?></a>
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
	</div> <br><br><br><br> <center> <img src="safesignbsp.png"> <br> <?php echo $inhalt[$i]["bsp"]?> </center> <br> <br>
	<a style="font-size:20px"> <center> <?php echo $inhalt[$i]["Produkt1"]?></center> </a> <br> <br><br> <br>
	<center> <img src="usb.jpg"> <br> <a style="font-size:30px"><?php echo $inhalt[$i]["preis"]?></a> <br><br> <a style="font-size:20px"> <center> <?php echo $inhalt[$i]["Produkt2"]?></center> </a> <br> <br><br> <br> </center>
</body>

<!-- Gesamtes Programm von Iliya Golestani -->