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
		//insertion des données dans la base 
		$unControleur->insertEleve($_POST);
		echo " <br> Insertion réussie.";
	}

	if (isset($_POST["Modifier"])){
		//update des données dans la base 
		$unControleur->updateEleve($_POST);
		//actualiser la page 
		header("Location: index.php?page=2");
	}

	//recuperation des clients de la base de données 
/*	if(isset($_POST['Filtrer'])){
		$filtre = $_POST['filtre'];
	}else {
		$filtre = ""; 
	}
	$lesEleves = $unControleur->selectAllEleves($filtre);
	require_once ("vue/vue_select_eleve.php");
*/
?>











