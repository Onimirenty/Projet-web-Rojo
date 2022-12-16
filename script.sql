CREATE TABLE Client(
    idClient SERIAL,
    nom VARCHAR(50),
    email VARCHAR(30),
    tel VARCHAR(14),
    motDePasse VARCHAR(12),
    PRIMARY KEY(idClient)
);

CREATE TABLE Habitation(
    idHabitation SERIAL,
    typeHabitation VARCHAR(70),
    nombreChambre INT,
    loyer DECIMAL,
    photo VARCHAR(50),
    quartier VARCHAR(50),
    descriptions VARCHAR(200),
    PRIMARY KEY(idHabitation)
);

CREATE TABLE Reservation(
    idReservation SERIAL,
    idHabitation INT,
    idClient INT,
    debut DATE,
    fin DATE,
    PRIMARY KEY(idReservation),
    FOREIGN KEY(idHabitation) REFERENCES Habitation(idHabitation),
    FOREIGN KEY(idClient) REFERENCES Client(idClient)
);

INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(1,2,'2022-12-01','2022-12-05');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(1,5,'2022-12-10','2022-12-11');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(1,4,'2022-12-15','2022-12-18');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(2,5,'2022-12-02','2022-12-05');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(2,6,'2022-12-11','2022-12-15');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(2,3,'2022-12-20','2022-12-21');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(3,4,'2022-12-02','2022-12-05');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(3,2,'2022-12-07','2022-12-10');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(3,1,'2022-12-21','2022-12-25');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(4,3,'2022-12-01','2022-12-07');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(4,1,'2022-12-09','2022-12-15');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(4,4,'2022-12-23','2022-12-25');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(5,2,'2022-12-03','2022-12-05');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(5,2,'2022-12-10','2022-12-13');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(6,2,'2022-12-06','2022-12-09');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(6,2,'2022-12-01','2022-12-05');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(7,2,'2022-12-09','2022-12-15');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(7,2,'2022-12-21','2022-12-25');
INSERT INTO Reservation(idHabitation, idClient, debut, fin) VALUES(7,2,'2022-12-26','2022-12-31');


INSERT INTO Client(nom, email, motDePasse, tel) VALUES('Diamond Emeralda', 'diam@hotmail.com','emeralde_d', '0341212112');
INSERT INTO Client(nom, email, motDePasse, tel) VALUES('Marie Anne', 'anne@yahoo.com','marie_a', '0341642164');
INSERT INTO Client(nom, email, motDePasse, tel) VALUES('Jacqueline Bordeau', 'jackie@gmail.com','bordeau_j', '0342412412');
INSERT INTO Client(nom, email, motDePasse, tel) VALUES('Mario Emilien', 'mario@gmail.com','emilien_m', '0347202172');
INSERT INTO Client(nom, email, motDePasse, tel) VALUES('Paul Dupot', 'paul@yahoo.com','dupot_p', '0341340112');
INSERT INTO Client(nom, email, motDePasse, tel) VALUES('Ariane Chanceux', 'ariane@hotmail.com','chanceux_a', '0341219002');


INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions) 
VALUES('Maison', 5, 120000, 'assets/imgs/maison/m1.jpg', 'Andoharanofotsy', 'Maison avec 5 chambres cote Andoharanofotsy avec piscine, jardin et baie vitree');

INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Maison', 1, 90000, 'assets/imgs/maison/m2.jpg', 'Ambohipo', 'Petite Maison isolee à 1 chambre situee pres du lac avec ambiance tres calme et apaisante');

INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Maison', 3, 100000, 'assets/imgs/maison/m3.jpg', 'Ivandry', 'Villa à 3 chambres avec baie vitree et interieur original');

INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Maison', 3, 150000, 'assets/imgs/maison/m4.jpg', 'Alasora', 'Maison style cabane à 3 chambres avec une ambiance calme et tres chalereuse');


INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Maison', 4, 125000, 'assets/imgs/maison/m5.jpg', 'Ambolokandrina', 'Villa à 5 chambres avec interieur moderne et innovant avec exterieur fait en bois');


INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Maison', 5, 200000, 'assets/imgs/maison/m6.jpg', 'Ambolokandrina', 'Villa à 5 chambres avec baie vitree, garage et aussi une architecture moderne et atypique');

-- Studios

INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Studio', 1, 40000, 'assets/imgs/studio/s1.jpg', 'Andoharanofotsy', 'Petit Studio à une chambre, moderne et spacieux, ideale pour un(e) etudiant(e)');

INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Studio', 1, 45000, 'assets/imgs/studio/s2.jpg', 'Ambohipo', 'Studio à 1 chambre, spacieuse et bien eclairee avec douche comprise');

INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Studio', 1, 65000, 'assets/imgs/studio/s3.jpg', 'Andoharanofotsy', 'Studio moderne et spacieux, bien eclairee et bien aeree avec douche et cuisine comprises');

INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Studio', 1, 35000, 'assets/imgs/studio/s4.jpg', 'Ambolokandrina', 'Studio à 1 chambre spacieuse et bien aeree');

-- Appartements 

INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Appartement', 3, 200000, 'assets/imgs/appartement/a1.jpg', 'Ivandry', 'Appartement spacieux et bien aeree à 3 chambres avec salon spacieux');

INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Appartement', 5, 350000, 'assets/imgs/appartement/a2.jpg', 'Analamahitsy', 'Appart à 5 chambre avec interieur moderne et spacieux');

INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Appartement', 2, 300000, 'assets/imgs/appartement/a3.jpg', 'Ivandry', 'Appartement cozy à 2 chambres, ideal pour 2 ou 3 personnes');

INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Appartement', 4, 250000, 'assets/imgs/appartement/a4.png', 'Andoharanofotsy', 'Appartement moderne et spacieux, compose de 4 chambres, avec un tres bel eclairage');

INSERT INTO habitation(typeHabitation, nombreChambre, loyer, photo, quartier, descriptions)
VALUES('Appartement', 3, 450000, 'assets/imgs/appartement/a5.jpg', 'Alasora', 'Appartement cozy et chalereux, ideal pour 2 ou 3 personnes, bel eclairage');

CREATE table details(
    idHabitation INT NOT NULL,
    photo1 VARCHAR(50),
    photo2 VARCHAR(50),
    photo3 VARCHAR(50),
    photo4 VARCHAR(50),
    photo5 VARCHAR(50),
    FOREIGN KEY(idHabitation) REFERENCES habitation(idHabitation)
);

INSERT INTO details VALUES(1, 'assets/imgs/maison/m1.jpg', 'assets/imgs/details/c1.jfif', 'assets/imgs/details/ch2.jfif', 'assets/imgs/details/jar1.jfif', 'assets/imgs/details/sal2.jfif');
INSERT INTO details VALUES(2, 'assets/imgs/maison/m2.jpg', 'assets/imgs/details/c2.jfif', 'assets/imgs/details/ch1.jfif', 'assets/imgs/details/jar1.jfif', 'assets/imgs/details/sal1.jfif');
INSERT INTO details VALUES(3, 'assets/imgs/maison/m3.jpg', 'assets/imgs/details/c2.jfif', 'assets/imgs/details/ch3.jfif', 'assets/imgs/details/jar2.jfif', 'assets/imgs/details/sal3.jfif');
INSERT INTO details VALUES(4, 'assets/imgs/maison/m4.jpg', 'assets/imgs/details/c3.jfif', 'assets/imgs/details/ch4.jfif', 'assets/imgs/details/jar1.jfif', 'assets/imgs/details/sal4.jfif');
INSERT INTO details VALUES(5, 'assets/imgs/maison/m5.jpg', 'assets/imgs/details/c4.jfif', 'assets/imgs/details/ch5.jfif', 'assets/imgs/details/jar2.jfif', 'assets/imgs/details/sal2.jfif');
INSERT INTO details VALUES(6, 'assets/imgs/maison/m6.jpg', 'assets/imgs/details/c5.jfif', 'assets/imgs/details/ch1.jfif', 'assets/imgs/details/jar2.jfif', 'assets/imgs/details/sal4.jfif');

CREATE TABLE updateHabitation(
    idUpdate SERIAL,
    idHabitation INT,
    typeHabitation VARCHAR(70),
    nombreChambre INT,
    loyer DECIMAL,
    photo VARCHAR(50),
    quartier VARCHAR(50),
    descriptions VARCHAR(200),
    PRIMARY KEY(idUpdate),
    FOREIGN KEY(idHabitation) REFERENCES habitation(idHabitation)
);
