CREATE DATABASE agence;

\c agence;

CREATE TABLE Client(
    id VARCHAR(10),
    nom VARCHAR(50),
    email VARCHAR(30),
    tel VARCHAR(14),
    motDePasse VARCHAR(12),
    PRIMARY KEY(id)
);

CREATE TABLE Reservation(
    id VARCHAR(10),
    idHabitation VARCHAR(10),
    idClient VARCHAR(10),
    debut DATE,
    fin DATE,
    PRIMARY KEY(id),
    FOREIGN KEY(idHabitation) REFERENCES Habitation(id),
    FOREIGN KEY(idClient) REFERENCES Client(id),
);

CREATE TABLE Habitation(
    id VARCHAR(10),
    type VARCHAR(20),
    nbChambre INT(1),
    loyer DECIMAL,
    photos VARCHAR(10),
    quartier VARCHAR(20),
    description VARCHAR(100),
    PRIMARY KEY(id)
);
