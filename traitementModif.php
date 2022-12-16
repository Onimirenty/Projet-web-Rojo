<?php
    include("fonction.php");

    $habitation['idHabitation'] = $_POST['idHabitation'];
    $habitation['typeHabitation'] = $_POST['type'];
    $habitation['nombreChambre'] = $_POST['nbChambre'];
    $habitation['loyer'] = $_POST['loyer'];
    $habitation['photo'] = $_POST['photo'];
    $habitation['quartier'] = $_POST['quartier'];
    $habitation['descriptions'] = $_POST['description'];

    update($habitation);

    header("Location: liste.php");
?>