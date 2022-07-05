<?php
	include('sprachen.php');
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
		<a href="" style="background-color: green;">Home</a>
		<a href="./Produkt/"><?php echo $sprache[$i]['Produkt']?></a>
		<a href="./Sicherheit/"><?php echo $sprache[$i]['Sicherheit']?></a>
		<a href="./Team/">Team</a>
		<a href="./Kontakt/"><?php echo $sprache[$i]['Kontakt']?></a>
		<a href="./Impressum/"><?php echo $sprache[$i]['Impressum']?></a>

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
	<a><center><br><br><br><br> </center> </a>
	<a> <center> <img src="logo2.gif"> </center> <br> <br> </a> <!-- GIF von Randy Ganskow -->
	<a style="font-size:75px;"> <center> <b><?php echo $sprache[$i]['Inhalt1Home']?></b> </center> </a>
	<a style="font-size:95px;"> <center> <u><b><?php echo $sprache[$i]['Inhalt2Home']?></b></u> </center> <br><br></a>
	<a style="font-size:65px;"> <center> <b><?php echo $sprache[$i]['Inhalt3Home']?></b> </center> </a>
	<a style="font-size:65px;"> <center> <b><?php echo $sprache[$i]['Inhalt4Home']?></b> </center> <br><br></a>
	<a style="font-size:45px;"> <center> <b><?php echo $sprache[$i]['Inhalt5Home']?></b> </center> <br><br><br><br></a>


</body>

<!-- Programm von Felix Ritter -->