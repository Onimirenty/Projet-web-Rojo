<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="style/formulaire.css">
</head>
<body>
    <div class="signUp">
        <div class="header-group">
            <div><a href="login.php"><button class="btn-up btn">Se connecter</button></a></div>
            <div class="logo">
                <div id="image"><img src="img/login/logo.png"/></div>
                <div id="entreprise">Agence</div> 
            </div>
        </div>
        
        <form action="traitementInscription.php" method="post" class="form">
            <div class="titre">S'inscrire</div>
            <div class="input">
                <div><legend>Nom</legend></div>
                <div><input type="text" class="input-in text name_text" name="nom"></div>
                <div><legend>E-mail</legend></div>
                <div><input type="email" class="input-in text name_text" placeholder="exemple@exemple.com" name="email"/></div>
                <div><legend>Numéro de téléphone</legend></div>
                <div><input type="text" class="input-in text name_text" name="tel"></div>
                <div><legend>Mot de passe</legend></div>
                <div><input type="password" class="input-in password psd" placeholder="********" name="mdp1"></div>
                <div><legend>Confirmer le mot de passe</legend></div>
                <div><input type="password" class="input-in password psd" placeholder="********" name="mdp2"></div>
                <div></div>
                <div><input type="submit" class="btn-submit btn" value="S'inscrire"/></div>
            </div>
        </form>
    </div>
</body>
</html>