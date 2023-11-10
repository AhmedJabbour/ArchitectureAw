<?php

require_once 'services\ClientService.php';
if (isset($_POST['clientID'])) {
    $clientID = $_POST['clientID'];

  
    $clientService = new ClientService();
    $client = $clientService->getClientByID($clientID);

    
    echo "<h2>Détails du Client</h2>";
    echo "<p><strong>ID_Client:</strong> {$client->ID_Client}</p>";
    echo "<p><strong>Nom:</strong> {$client->Nom}</p>";
    echo "<p><strong>Prénom:</strong> {$client->Prenom}</p>";
    echo "<p><strong>Date de Naissance:</strong> {$client->Date_de_Naissance}</p>";
    echo "<p><strong>Situation Familiale:</strong> {$client->Situation_Familiale}</p>";
    echo "<p><strong>Adresse:</strong> {$client->Adresse}</p>";
    echo "<p><strong>Numéro de téléphone:</strong> {$client->Numero_Telephone}</p>";
    echo "<p><strong>Adresse e-mail:</strong> {$client->Adresse_Email}</p>";
} else {
    echo "Erreur : ID_Client non spécifié.";
}
?>
