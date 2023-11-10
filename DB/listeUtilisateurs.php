<?php
require_once('DB/BDD/AccesBDD/accesBdd.php');
use DB\BDD\AccesBDD;
?>

<html>

<head>
    <title>Liste des clients</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div>
        <div>ID_Client</div>
        <div>Nom</div>
        <div>Prénom</div>
        <div>Adresse</div>

        <?php

        $accesBDD = new AccesBDD;
        $clients = $accesBDD->recupererListeClients();

        // Boucle pour afficher les clients
        foreach ($clients as $client) {
            echo "<div>" . $client->ID_Client . "</div>";
            echo "<div>" . $client->Nom . "</div>";
            echo "<div>" . $client->Prenom . "</div>";
            echo "<div>" . $client->Adresse . "</div>";
        }

        ?>
    </div>
</body>

</html>
