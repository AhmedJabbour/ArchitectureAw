<?php

class Compte_Bancaire {
    // Propriétés de la classe Compte_Bancaire
    public $ID_Compte;
    public $Type_de_Compte;
    public $Solde;
    public $Date_Ouverture;
    public $Taux_Interet;
    public $ID_Client;

    // Constructeur de la classe Compte_Bancaire
    public function __construct($ID_Compte, $Type_de_Compte, $Solde, $Date_Ouverture, $Taux_Interet, $ID_Client) {
        $this->ID_Compte = $ID_Compte;
        $this->Type_de_Compte = $Type_de_Compte;
        $this->Solde = $Solde;
        $this->Date_Ouverture = $Date_Ouverture;
        $this->Taux_Interet = $Taux_Interet;
        $this->ID_Client = $ID_Client;
    }

    // Méthodes pour obtenir les propriétés du compte bancaire
    public function getIDCompte() {
        return $this->ID_Compte;
    }

    public function getTypeCompte() {
        return $this->Type_de_Compte;
    }

    public function getSolde() {
        return $this->Solde;
    }

    public function getDateOuverture() {
        return $this->Date_Ouverture;
    }

    public function getTauxInteret() {
        return $this->Taux_Interet;
    }

    public function getIDClient() {
        return $this->ID_Client;
    }
}

?>
