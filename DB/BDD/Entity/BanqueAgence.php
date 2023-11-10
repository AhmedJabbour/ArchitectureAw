<?php

class BanqueAgence {
    // Propriétés de la classe Banque_Agence
    public $ID_Banque;
    public $Nom_Banque;
    public $Adresse;
    public $Numero_Telephone;
    public $Adresse_Email;

    // Constructeur de la classe Banque_Agence
    public function __construct($ID_Banque, $Nom_Banque, $Adresse, $Numero_Telephone, $Adresse_Email) {
        $this->ID_Banque = $ID_Banque;
        $this->Nom_Banque = $Nom_Banque;
        $this->Adresse = $Adresse;
        $this->Numero_Telephone = $Numero_Telephone;
        $this->Adresse_Email = $Adresse_Email;
    }

    // Méthodes pour obtenir les propriétés de la banque/agence
    public function getIDBanque() {
        return $this->ID_Banque;
    }

    public function getNomBanque() {
        return $this->Nom_Banque;
    }

    public function getAdresse() {
        return $this->Adresse;
    }

    public function getNumeroTelephone() {
        return $this->Numero_Telephone;
    }

    public function getAdresseEmail() {
        return $this->Adresse_Email;
    }
}

?>
