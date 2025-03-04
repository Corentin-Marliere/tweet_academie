<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../_partial/_head.php') ?>
    <title>Faccovi - Connexion</title>
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
                <input type="Email" name="Email" required>
            </div>
            <div>
                <label for="MDP"> Entrer votre Mot de Passe: </label>
                <input type="Password" name="Password" required></input>
            </div>
            <input type="submit" value="Connexion"></input>
        </form>
        <p>Pas de compte?</p>
            <a href="../View/v_register.php">Inscrivez-vous içi!</a>
    </div>
    </main>

    <footer>
        <?php include('../_partial/_footer.php') ?>
    </footer>
</body>

</html>