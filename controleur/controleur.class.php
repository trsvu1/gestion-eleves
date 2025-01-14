<?php
	require_once ("modele/modele.class.php");
	class Controleur {
		private $unModele ; 

		public function   __construct(){
			$this->unModele = new Modele (); 
		}
		/****************** Gestion des eleves *****************/
		public function insertEleve($tab){
			$this->unModele->insertEleve($tab);
		}

		public function selectAllEleves ($filtre){
			$lesEleves = $this->unModele->selectAllEleves($filtre); 
			return $lesEleves; 
		}
		
		public function deleteEleve($id_eleve){
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












