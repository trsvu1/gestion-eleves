<?php
	require_once ("modele/modele.class.php");
	class Controleur {
		private $unModele ; 

		public function   __construct(){
			//instancier la classe modele 
			$this->unModele = new Modele (); 
		}
		/****************** Gestion des clients ******/
		public function insertEleve($tab){
			//controler les donnees avant leur insertion dans la BDD 

			//appel au modele pour inserer les données
			$this->unModele->insertEleve($tab);
		}

		public function selectAllEleves ($filtre){
			$lesEleves = $this->unModele->selectAllEleves($filtre); 

			//controler les données 

			return $lesEleves; 
		}
		public function deleteEleve($id_eleve){
			//on doit vérifier que le client existe dans la table 
			$this->unModele->deleteEleve($id_eleve);
		}

		public function updateEleve($tab){
			$this->unModele->updateEleve($tab);
		}

		public function selectWhereEleve($id_eleve){
			return $this->unModele->selectWhereEleve($id_eleve);
		}
	}
	
?>












