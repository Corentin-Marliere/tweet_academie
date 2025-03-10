<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="stylesheet" href="../../dist/styles.css">
  <?php include('../_partial/_head.php') ?>
  <title>Faccovi - Connexion</title>
</head>

<body>
  <header>
    <?php include('../_partial/_header.php') ?>
  </header>

  <main>
    <div class="flex flex-col text-center m-5">
      <form>
        <div class="flex flex-col mb-3">
          <label for="Mail" class="underline">Entrer votre Email: </label>
          <input type="Email" name="Email" required>
        </div>
        <div class="flex flex-col mb-3">
          <label for="MDP" class="underline"> Entrer votre Mot de Passe: </label>
          <input type="Password" name="Password" required></input>
        </div>
        <input type="submit" value="Se connecter"></input>
      </form>
      <div class="m-5">
        <p>Pas de compte?</p>
        <a href="../View/v_register.php" class="text-blue-500 underline">Inscrivez-vous ici!</a>
      </div>
    </div>
  </main>
</body>

</html>