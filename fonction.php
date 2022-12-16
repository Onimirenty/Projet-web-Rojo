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
            $client['isAdmin'] = $ligne -> isAdmin;
        }
        $resultats -> closeCursor();
        return $client;
    }
    
    function addClient($client){
        $connex = dbconnect();
        $requette = "INSERT INTO Clients(email,nom,motDePasse,tel) VALUES ('%s','%s','%s','%s')";
        $requette = sprintf($requette, $client['email'], $client['nom'], $client['mdp'], $client['tel']);
        $connex -> exec($requette);
    }

    function getHabitation($id){
        $habitation = array();
        $connex = dbconnect();
        $requette = "SELECT * FROM Habitation WHERE id like '%s' LIMIT 1";
        $requette = sprintf($requette, $id);
        $resultats = $connex -> query($requette);
        $resultats -> setFetchMode(PDO::FETCH_OBJ);
        while($ligne = $resultats -> fetch()){
            $habitation['id'] = $ligne -> id;
            $habitation['type'] = $ligne -> type;
            $habitation['nbChambre'] = $ligne -> nbChambre;
            $habitation['loyer'] = $ligne -> loyer;
            $habitation['photos'] = $ligne -> photos;
            $habitation['quartier'] = $ligne -> quartier;
            $habitation['description'] = $ligne -> description;    
        }
        $resultats -> closeCursor();
        return $habitation;
    }

    function getReservation($idHabitation){
        $reservation = array();
        $connex = dbconnect();
        $requette = "SELECT * FROM Reservation WHERE idHabitation like '%s'";
        $requette = sprintf($requette, $idHabitation);
        $resultats = $connex -> query($requette);
        $resultats -> setFetchMode(PDO::FETCH_OBJ);
        $i = 0;
        while($ligne = $resultats -> fetch()){
            $reservation[$i]['id'] = $ligne -> id;
            $reservation[$i]['start'] = $ligne -> debut;
            $reservation[$i]['end'] = $ligne -> fin;
            $i ++;
        }
        $resultats -> closeCursor();
        return $reservation;
    }
?>