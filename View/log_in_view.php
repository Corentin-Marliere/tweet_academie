<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require('../_partial/_head.php');
    ?>
    <link rel="stylesheet" href="../style/log_in_view.css">
</head>
<body>
    <header>
        <img src="../Assets/logo/logo.png" alt="">
    </header>
    <div>
        <form>
            <div>
                <label for="Mail">Entrer votre Email: </label>
                <input type="Email" name="Email">
            </div>
            <div>
                <label for="MDP"> Entrer votre Mot de Passe: </label>
                <input type="Password" name="Password"></input>
            </div>
            <input type="submit" value="Connexion"></input>
            <p>Pas de compte?</p>
            <a href="../View/register.php">Inscrivez-vous içi!</a>
        </form>
    </div>
</body>
</html>