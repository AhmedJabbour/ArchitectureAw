CREATE DATABASE Banque;

use Banque;

CREATE TABLE Client (
    ID_Client INT PRIMARY KEY,
    Nom VARCHAR(255),
    Prenom VARCHAR(255),
    Date_de_Naissance DATE,
    Situation_Familiale VARCHAR(50),
    Adresse VARCHAR(255),
    Numero_Telephone VARCHAR(20),
    Adresse_Email VARCHAR(255)
);

-- Création de la table Compte_Bancaire
CREATE TABLE CompteBancaire (
    ID_Compte INT PRIMARY KEY,
    Type_de_Compte VARCHAR(50),
    Solde DECIMAL(10, 2),
    Date_Ouverture DATE,
    Taux_Interet DECIMAL(5, 2),
    ID_Client INT,
    FOREIGN KEY (ID_Client) REFERENCES Client(ID_Client)
);

-- Création de la table Ligne_de_Compte
CREATE TABLE LigneDeCompte (
    ID_Ligne INT PRIMARY KEY,
    Description VARCHAR(255),
    Montant DECIMAL(10, 2),
    Date_Transaction DATE,
    ID_Compte INT,
    FOREIGN KEY (ID_Compte) REFERENCES Compte_Bancaire(ID_Compte)
);


CREATE TABLE BanqueAgence (
    ID_Banque INT PRIMARY KEY,
    Nom_Banque VARCHAR(255),
    Adresse VARCHAR(255),
    Numero_Telephone VARCHAR(20),
    Adresse_Email VARCHAR(255)
);


CREATE TABLE ConseillerBancaire (
    ID_Conseiller INT PRIMARY KEY,
    Nom_Conseiller VARCHAR(255),
    Prenom_Conseiller VARCHAR(255),
    Numero_Telephone VARCHAR(20),
    Adresse_Email VARCHAR(255),
    ID_Banque INT,
    FOREIGN KEY (ID_Banque) REFERENCES Banque_Agence(ID_Banque)
);


INSERT INTO Client (Nom, Prenom, Date_de_Naissance, Situation_Familiale, Adresse, Numero_Telephone, Adresse_Email)
VALUES 
    ('Doe', 'John', '1980-05-15', 'Célibataire', '123 Main Street, Cityville', '+1234567890', 'john.doe@example.com'),
    ('Smith', 'Jane', '1992-08-25', 'Marié', '456 Oak Avenue, Townsville', '+9876543210', 'jane.smith@example.com'),
    ('Johnson', 'Bob', '1975-12-10', 'Divorcé', '789 Pine Road, Villageton', '+1122334455', 'bob.johnson@example.com');
