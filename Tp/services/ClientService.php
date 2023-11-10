<?php
require_once 'do\dao\ClientDAO.php';

class ClientService {
    private $clientDAO;

    public function __construct() {
        $this->clientDAO = new ClientDAO();
    }

    public function getClientByID($clientID) {
        return $this->clientDAO->getClientByID($clientID);
    }

    public function getListeClients() {
        $clients = $this->clientDAO->getListeClients(); // Supposons que vous avez une méthode dans ClientDAO pour obtenir la liste des clients
        return $clients;
    }
    // Ajoutez d'autres méthodes de service pour gérer la logique métier liée aux clients
}
?>
