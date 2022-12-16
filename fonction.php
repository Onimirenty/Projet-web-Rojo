<?php
    require("connexion.php");

    function getClient($email,$mdp){
        $client = array();
        $connex = dbconnect();
        $requette = "SELECT * FROM Client WHERE email like '%s' AND motDePasse like '%s' LIMIT 1";
        $requette = sprintf($requette, $email, $mdp);
        $resultats = $connex -> query($requette);
        $resultats -> setFetchMode(PDO::FETCH_OBJ);
        while($ligne = $resultats -> fetch()){
            $client['id'] = $ligne -> id;
            echo $ligne -> id;
            $client['isAdmin'] = $ligne -> isAdmin;
        }
        $resultats -> closeCursor();
        return $client;
    }
    
    function addClient($email, $nom, $mdp, $tel){
        $connex = dbconnect();
        $requette = "INSERT INTO Client(email,nom,motDePasse,tel) VALUES ('%s','%s','%s','%s')";
        $requette = sprintf($requette, $email, $nom, $mdp, $tel);
        $connex -> exec($requette);
    }

    function getReservation($idHabitation){
        $reservation = array();
        $connex = dbconnect();
        $requette = "SELECT * FROM Reservation WHERE idHabitation = %s";
        $requette = sprintf($requette, $idHabitation);
        $resultats = $connex -> query($requette);
        $resultats -> setFetchMode(PDO::FETCH_OBJ);
        $i = 0;
        while($ligne = $resultats -> fetch()){
            $reservation[$i]['start'] = $ligne -> debut;
            $reservation[$i]['end'] = $ligne -> fin;
            $i ++;
        }
        $resultats -> closeCursor();
        return $reservation;
    }

    function getHabitation($id){
        $habitation = array();
        $connex = dbconnect();
        $requette = "SELECT * FROM Habitation WHERE idHabitation = %s LIMIT 1";
        $requette = sprintf($requette, $id);
        $resultats = $connex -> query($requette);
        $resultats -> setFetchMode(PDO::FETCH_OBJ);
        while($ligne = $resultats -> fetch()){
            $habitation['idHabitation'] = $ligne -> idhabitation;
            $habitation['typeHabitation'] = $ligne -> typehabitation;
            $habitation['nombreChambre'] = $ligne -> nombrechambre;
            $habitation['loyer'] = $ligne -> loyer;
            $habitation['photo'] = $ligne -> photo;
            $habitation['quartier'] = $ligne -> quartier;
            $habitation['descriptions'] = $ligne -> descriptions;    
        }
        $resultats -> closeCursor();
        return $habitation;
    }

    function update($habitation){
        $idHabitation = $habitation['idHabitation'];
        $typeHabitation = $habitation['typeHabitation'];
        $nombreChambre = $habitation['nombreChambre'];
        $loyer = $habitation['loyer'];
        $photo = $habitation['photo'];
        $quartier = $habitation['quartier'];
        $descriptions = $habitation['descriptions'];

        $habitat = getHabitation($habitation['idHabitation']);
        $habitat['idHabitation'] = $habitation['idHabitation'];
        addUpdateHabitation($habitat);

        $connex = dbconnect();
        $requette = "UPDATE Habitation SET typeHabitation = '%s', nombreChambre = %d,
        loyer = %d, photo = '%s',quartier ='%s' ,descriptions = '%s'";
        $requette = sprintf($requette, $typeHabitation,$nombreChambre,$loyer,$photo,$quartier,$descriptions);
        $connex -> exec($requette);
    }

    function addUpdateHabitation($habitation){
        $idHabitation = $habitation['idHabitation'];
        $typeHabitation = $habitation['typeHabitation'];
        $nombreChambre = $habitation['nombreChambre'];
        $loyer = $habitation['loyer'];
        $photo = $habitation['photo'];
        $quartier = $habitation['quartier'];
        $descriptions = $habitation['descriptions'];

        $connex = dbconnect();
        $requette = "INSERT INTO updateHabitation(idHabitation,typeHabitation,nombreChambre,loyer,photo,quartier,descriptions) VALUES (%d,'%s',%d,%d,'%s','%s','%s')";
        $requette = sprintf($requette, $idHabitation,$typeHabitation,$nombreChambre,$loyer,$photo,$quartier,$descriptions);
        $connex -> exec($requette);
    }
?>