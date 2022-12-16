<?php
    include('fonction.php');

    if(!isset($_POST['nom'])||$_POST['nom']==""){
        header("Location: inscription.php?erreur=1");
    }
    if(!isset($_POST['email'])||$_POST['email']==""){
        header("Location: inscription.php?erreur=1");
    }
    if(!isset($_POST['tel'])||$_POST['tel']==""){
        header("Location: inscription.php?erreur=1");
    }
    if(!isset($_POST['mdp1'])||$_POST['mdp1']==""){
        header("Location: inscription.php?erreur=1");
    }
    if(!isset($_POST['mdp2'])||$_POST['mdp2']==""){
        header("Location: inscription.php?erreur=1");
    }
    if(!isset($_POST['mdp2'])) {
        header("Location: inscription.php?erreur=1");
    }
  
    if($_POST['mdp1']!=$_POST['mdp2']){
        header("Location: inscription.php?erreur=2");
    }

    $name = $_POST['nom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $mdp = $_POST['mdp1'];

    addClient($email,$name,$mdp,$tel);
    
    session_start();
    $_SESSION['connect'] = 'true';
    header("Location:acceuil.php");
?>