<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style/formulaire.css">
</head>
<body>
<div class="login">
        <div class="header-group">
            <div><button class="btn-up btn">S'inscrire</button></div>
            <div class="logo">
                <div id="image"><img src="img/login/logo.png" alt="x"/></div>
                <div id="entreprise">Agence Immo</div> 
            </div>
        </div>
        
        <form action="traitementLogin.php" method="post" class="form">
            <div class="titre">Se connecter</div>
            <div class="input">
                <div><legend>E-mail</legend></div>
                <div><input type="email" class="input-in text name_text" placeholder="exemple@exemple.com" name="email"/></div>
                <div><legend>Mot de passe</legend></div>
                <div><input type="password" class="input-in password psd" placeholder="********" name="mdp"/></div>
                <div><button class="btn-link">Mot de passe oubier?</button></div>
                <div><input type="submit" class="btn-submit btn" value="Se connecter"/></div>
            </div>
        </form>
    </div>
</body>
</html>