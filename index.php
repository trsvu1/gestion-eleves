<?php
	require_once("controleur/controleur.class.php"); 
	
	$unControleur = new Controleur();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Site Gestion</title>
</head>
<body>
<center>
<h1> Site pour la gestion les notes des eleves </h1> 
<br>
<a href="index.php?page=1"> 
	<img src="images/accueil.jpg" height="100" width="100" style="margin-right: 20px;">
</a>

<a href="index.php?page=2"> 
	<img src="images/eleve.jpeg" height="100" width="100" style="margin-left: 20px;">
</a>

<?php
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}else {
		$page = 1 ;
	}
	switch ($page) {
		case 1 : require_once ("controleur/accueil.php"); break;
		case 2 : require_once ("controleur/gestion_eleves.php"); break;
	}
?>

</center>
</body>
</html>