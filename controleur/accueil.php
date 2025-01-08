<br>
<h2> Accueil </h2>
<br>

<h3>Recherche les notes des eleves</h3>

<?php
if(isset($_POST['Filtrer'])){
	$filtre = $_POST['filtre'];
}else {
	$filtre = ""; 
}
$lesEleves = $unControleur->selectAllEleves($filtre);
require_once ("vue/vue_cherche_eleve.php");
?>

<br>
<a href="https://pro.orange.fr"> Nous joindre </a>
<br>
<br> 