<?php
    include("fonction.php");

    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $client = getClient($email,$mdp);
    if((count($client))==0){
        header("Location:login.php?erreur=1");
    }
    if($client['isAdmin']=="true"){
        session_start();
        $_SESSION['connect'] = "true";
        $_SESSION['admin'] = "true";
        header("Location:liste.php");
    }
    else{
        session_start();
        $_SESSION['connect'] = "true";
        header("Location:acceuil.php");
    }
?>