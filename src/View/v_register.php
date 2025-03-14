<!DOCTYPE html>
<html lang="fr">

<head>

  <link rel="stylesheet" href="../../dist/styles.css">

  <?php include('../_partial/_head.php'); ?>
  <script src="../../public/scripts/toggle_theme.js"></script>

  <title>Faccovi - Inscription</title>
</head>

<body class="flex flex-col h-screen" data-theme="modern">
  <header class="flex flex-row justify-center">
    <img src="../../public/Assets/logo/logo.png" alt=""
      class="w-44">
  </header>

  <main class="flex flex-col grow justify-center">
    <div class="flex flex-row justify-center items-center mb-5">
      <h1 class="text-xl mr-5">Connectez vous !</h1>
      <button id="toogle_Theme" type="button" class="btn-icon variant-ghost-surface w-auto ml-5">
        <img src="../../public/Assets/images/brightness-and-contrast-blue.png" alt=""
          class="w-5"></button>
    </div>
    <div>
      <div class="flex flex-col items-center">
        <form method="POST" action="../Controller/c_create_user.php">
          <div class="mb-5">
            <label for="Pseudo" class="underline mb-0.5">Pseudo :</label>
            <input type="Text" name="Pseudo" required
              class="input" placeholder="Entrez votre pseudo">
          </div>
          <div class="mb-5">
            <label for="date_of_birth" class="underline mb-0.5">Date de naissance :</label>
            <input type="date" name="date_of_birth" required
              class="input" placeholder="Entrez votre date de naissance">
          </div>
          <div class="mb-5">
            <label for="Mail" class="underline mb-0.5">Email : </label>
            <input type="Email" name="Email" required
              class="input" placeholder="Entrez votre e-mail">
          </div>
          <div class="mb-5">
            <label for="Pwd" class="underline mb-0.5">Mot de Passe :</label>
            <input type="Password" name="Password" required
              class="input" placeholder="Créez votre mot de passe">
          </div>
      </div>
      <div class="text-center">
        <input type="submit" value="Register"
          class="btn btn-sm w-36 bg-gradient-to-br variant-gradient-primary-secondary">
      </div>
      </form>
      <div id="access-denied">
        <?php
        if (isset($messageEmail)) {
        ?>
          <div class="access-denied">
            <p class="text-red-600 text-center font-bold m-5"><?= $messageEmail ?></p>
          </div>
        <?php
        }
        ?>
        <?php
        if (isset($messageAge)) {
        ?>
          <div class="access-denied">
            <p><?= $messageAge ?></p>
          </div>
        <?php
        }
        ?>
      </div>
      <div class="text-center m-5">
        <p>Vous avez un compte?</p>
        <a href="../View/v_login.php" class="text-blue-500 border-blue-800 underline">Connectez vous ici</a>
      </div>
    </div>
    </div>
  </main>
</body>

</html>