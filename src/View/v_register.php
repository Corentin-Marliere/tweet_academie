<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="stylesheet" href="../../dist/styles.css">
  <?php include('../_partial/_head.php'); ?>
  <title>Faccovi - Inscription</title>
</head>

<body>
  <header>
    <?php include('../_partial/_header.php') ?>
  </header>

  <main>
    <div class="flex mb-4">
      <h3>Créez un compte:</h3>
      <form>
        <div>
          <label for="Lastname">Entrez votre Nom</label>
          <input type="text" name="Lastname" required>
        </div>
        <div>
          <Label for="Firstname">Entrez votre Prénom</Label>
          <input type="text" name="Firstname" required>
        </div>
        <div>
          <label for="Pseudo">Entrez votre Pseudo</label>
          <input type="Text" name="Pseudo" required>
        </div>
        <div>
          <label for="Dob">Entrez votre Date de naissance</label>
          <input type="datetime" name="Dob" required>
        </div>
        <div>
          <label for="Mail">Entrer votre Email: </label>
          <input type="Email" name="Email" required>
        </div>
        <div>
          <label for="Pwd"> Entrer votre Mot de Passe: </label>
          <input type="Password" name="Password" required></input>
        </div>
        <input type="submit" value="Register"></input>
      </form>
      <p>Vous avez un compte?</p>
      <a href="../View/v_login.php">Connectez vous içi!</a>
    </div>
  </main>

  <footer>
    <?php include('../_partial/_footer.php') ?>
  </footer>
</body>

</html>