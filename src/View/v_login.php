<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../_partial/_head.php') ?>
    <title>Facovi - Connexion</title>
</head>

<body>
    <header>
        <?php include('../_partial/_header.php') ?>
    </header>

    <main>
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
    </main>

    <footer>
        <?php include('../_partial/_footer.php') ?>
    </footer>
</body>

</html>