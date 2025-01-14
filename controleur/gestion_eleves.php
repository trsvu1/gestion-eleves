<br>
<h2> Gestion des Eleves </h2>

<?php
	$leEleve = null; 
	if (isset($_GET['action']) && isset($_GET['id_eleve'])){
		$action = $_GET['action']; 
		$id_eleve = $_GET['id_eleve']; 
		switch ($action) {
			case 'sup':
				$unControleur->deleteEleve($id_eleve); 
				break;
			case 'edit':
				$leEleve = $unControleur->selectWhereEleve($id_eleve); 
				break;
		}
	}

	require_once ("vue/vue_insert_eleve.php");
	if (isset($_POST["Valider"])){
		
		$unControleur->insertEleve($_POST);
		echo " <br> Insertion réussie.";
	}

	if (isset($_POST["Modifier"])){
		
		$unControleur->updateEleve($_POST);
		
		header("Location: index.php?page=2");
	}
?>

<br>
<a href=""> Nous joindre </a>
<br>











