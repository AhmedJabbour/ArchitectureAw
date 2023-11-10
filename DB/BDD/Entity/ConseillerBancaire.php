<?php

class Conseiller_Bancaire {
    // Propriétés de la classe Conseiller_Bancaire
    public $ID_Conseiller;
    public $Nom_Conseiller;
    public $Prenom_Conseiller;
    public $Numero_Telephone;
    public $Adresse_Email;
    public $ID_Banque;

    // Constructeur de la classe Conseiller_Bancaire
    public function __construct($ID_Conseiller, $Nom_Conseiller, $Prenom_Conseiller, $Numero_Telephone, $Adresse_Email, $ID_Banque) {
        $this->ID_Conseiller = $ID_Conseiller;
        $this->Nom_Conseiller = $Nom_Conseiller;
        $this->Prenom_Conseiller = $Prenom_Conseiller;
        $this->Numero_Telephone = $Numero_Telephone;
        $this->Adresse_Email = $Adresse_Email;
        $this->ID_Banque = $ID_Banque;
    }

    // Méthodes pour obtenir les propriétés du conseiller bancaire
    public function getIDConseiller() {
        return $this->ID_Conseiller;
    }

    public function getNomConseiller() {
        return $this->Nom_Conseiller;
    }

    public function getPrenomConseiller() {
        return $this->Prenom_Conseiller;
    }

    public function getNumeroTelephone() {
        return $this->Numero_Telephone;
    }

    public function getAdresseEmail() {
        return $this->Adresse_Email;
    }

    public function getIDBanque() {
        return $this->ID_Banque;
    }
}

?>
