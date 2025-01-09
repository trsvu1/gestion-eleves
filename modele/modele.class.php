<?php
class Modele {
	private $unPdo ; 
	//connexion via la classe PDO : PHP DATA Object 

	public function __construct(){
		$serveur = "localhost"; 
		$bdd = "gestion_eleves"; 
		$user = "root";
		$mdp = "root"; 
		try{
		$this->unPdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user, $mdp);
		}
		catch(PDOException $exp){
			echo "Erreur de connexion à la BDD";
		}
	}
	/**************** Gestion des clients ************/
	public function insertEleve($tab){
		$requete = "insert into eleve values (null, :nom, :prenom, :classe, :matiere1, :matiere2, :matiere3, :matiere4, :matiere5);";
		$donnees = array(':nom' => $tab['nom'],
						 ':prenom' => $tab['prenom'],
						 ':classe' => $tab['classe'],
						 ':matiere1' => $tab['matiere1'],
						 ':matiere2' => $tab['matiere2'],
						 ':matiere3' => $tab['matiere3'],
						 ':matiere4' => $tab['matiere4'],
						 ':matiere5' => $tab['matiere5']
						); 
		//on prépare la requete 
		$exec = $this->unPdo->prepare ($requete);
		//exécuter la requete 
		$exec->execute ($donnees);
	}
	public function selectAllEleves ($filtre){
		if ($filtre == ""){
				$requete = "select * from eleve ;" ; 
				$exec = $this->unPdo->prepare ($requete);
				$exec->execute ();
		} else{
				$requete = "select * from eleve where nom like :filtre or prenom like :filtre or classe like :filtre
				            or matiere1 like :filtre or matiere2 like :filtre or matiere3 like :filtre
							or matiere4 like :filtre or matiere5 like :filtre;" ;
				$donnees = array(":filtre"=>"%".$filtre."%");
				$exec = $this->unPdo->prepare ($requete);
				$exec->execute ($donnees);
		}
		
		return $exec->fetchAll(); //extraire tous les clients
	}

	public function deleteEleve($id_eleve){
		$requete = "delete from eleve where id_eleve = :id_eleve;"; 
		$donnees = array(":id_eleve"=>$id_eleve); 
		$exec = $this->unPdo->prepare ($requete);
		$exec->execute ($donnees);
	}

	public function updateEleve ($tab){
		$requete ="update eleve set nom =:nom, prenom =:prenom, classe =:classe, matiere1 =:matiere1
		           matiere2 =:matiere2, matiere3 =:matiere3, matiere4 =:matiere4, matiere5 =:matiere5 where id_eleve =:id_eleve ;"; 
		$donnees = array(
						 ':id_eleve' => $tab['id_eleve'],
						 ':nom' => $tab['nom'],
						 ':prenom' => $tab['prenom'],
						 ':classe' => $tab['classe'],
						 ':matiere1' => $tab['matiere1'],
						 ':matiere2' => $tab['matiere2'],
						 ':matiere3' => $tab['matiere3'],
						 ':matiere4' => $tab['matiere4'],
						 ':matiere5' => $tab['matiere5'],
						); 
		$exec = $this->unPdo->prepare ($requete);
		$exec->execute ($donnees);
	}
	public function selectWhereEleve($id_eleve){
		$requete = "select * from eleve where id_eleve = :id_eleve";
		$donnees = array(":id_eleve"=>$id_eleve); 
		$exec = $this->unPdo->prepare ($requete);
		$exec->execute ($donnees);
		$unEleve = $exec->fetch(); //extraire un seul client.
		return $unEleve ;
	}
} 
?>






















