<?php
require_once('DB/BDD/Entity/Client.php');

use DB\BDD\Entity\Client;
use PDO;
use PDOException;

//namespace BDD;

class AccesBDD {
	
	public $conn;
	
	// Connexion à la base de données
	function connectionBdd() {
		
		// Déclaration des variables de connexion
		$DB_HOST = "127.0.0.1";
		$DB_NAME = "Banque";
		$DB_PORT = 3306;
		$DB_USER = "root";
		$DB_PSWD = "";
			
		try {
			
			$connString = 
				"mysql:host=".$DB_HOST.";dbname=".$DB_NAME.";
				port=".$DB_PORT;
				$this->$conn = new PDO($connString, $DB_USER, $DB_PSWD);
				
		}
		catch(PDOException $e) {
			die("Erreur : " . $e->getMessage());
		}
	}

	// Requête de récupération des données en BDD
    public function recupererListeClients() {    
        $this->connectionBdd();
        
        // Utilisation de requête préparée pour éviter les injections SQL
        $stmt = $this->conn->prepare("SELECT ID_Client, Nom, Prenom, Adresse FROM Client");
        $stmt->execute();
        
        $clients = [];
        
        // Parcourir les résultats et créer des objets Client
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $client = new Client;
            $client->ID_Client = $row['ID_Client'];
            $client->Nom = $row['Nom'];
            $client->Prenom = $row['Prenom'];
            $client->Adresse = $row['Adresse'];
            $clients[] = $client;
        }
        
        // Retourner le tableau d'objets Client
        return $clients;
    }
}

// Exemple d'utilisation de la classe AccesBDD pour récupérer et afficher la liste des clients
/*
$accesBDD = new AccesBDD();
$listeClients = $accesBDD->recupererListeClients();

// Afficher les informations des clients
foreach ($listeClients as $client) {
    echo "ID_Client: " . $client->ID_Client . " - Nom: " . $client->Nom . " - Prenom: " . $client->Prenom . " - Adresse: " . $client->Adresse . "<br>";
}

}
*/
?>