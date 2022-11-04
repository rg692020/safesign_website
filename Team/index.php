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
<body style="background:#add8e6;">
	<!-- This is the outline for the navbar, used to navigate between different parts of the website -->
	<div class="topnav">
		<a href="../" style=background-color: green;>Home</a>
		<a href="../Produkt/"><?php echo $sprache[$i]['Produkt']?></a>
		<a href="../Sicherheit/"><?php echo $sprache[$i]['Sicherheit']?></a>
		<a href="../Team/" style=background-color:green;>Team</a>
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
	</div>
	<br> <br>
<div> <center>
    <img src ="ceo.jpg" style="height:15%; width:15%;"> 
</center> </div>  <br> <a style="font-size:30px"><center>CEO - Felix Ritter</center></a>
</center> </div> <a style="font-size:15px; color:#858c88"><center>felix@safesign.de</center></a> <br><br><br>
<div> <center>
    <img src ="cto.jpg" style="height:15%; width:15%;"> 
</center> </div>  <br> <a style="font-size:30px"><center>CTO - Tom Jaroslawsky</center></a>
</center> </div> <a style="font-size:15px; color:#858c88"><center>thomas@safesign.de</center></a> <br><br><br>
<div> <center>
    <img src ="cfo.jpg" style="height:15%; width:15%;"> 
</center> </div>  <br> <a style="font-size:30px"><center>CFO - Randy Ganskow</center></a>
</center> </div> <a style="font-size:15px; color:#858c88"><center>randy@safesign.de</center></a> <br><br><br>
<div> <center>
    <img src ="cmo.jpg" style="height:15%; width:15%;"> 
</center> </div>  <br> <a style="font-size:30px"><center>CMO - Iliya Golestani</center></a>
</center> </div> <a style="font-size:15px; color:#858c88"><center>huyhoangpham@safesign.de</center></a> <br><br><br><br><br><br><br><br>

</div>
</div>
</body>
<!-- Gesamtes Programm von Felix Ritter, Zeilen 46-60 bearbeitet von Randy Ganskow und Iliya -->
