<!DOCTYPE html>
<html lang="fr" class="light">

<head>
  <link rel="stylesheet" href="../../dist/styles.css">

  <?php include('../_partial/_head.php') ?>
  <script src="../../public/scripts/toggle_theme.js"></script>

  <title>Faccovi - Connexion</title>
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
        <form method="POST" action="../Controller/c_check_log_in.php">
          <div class="mb-5">
            <label for="Mail" class="underline mb-0.5">Email : </label>
            <input type="Email" name="Email" placeholder="Entrez votre adresse mail"
              class="input" required>
          </div>
          <div class="mb-5">
            <label for="MDP" class="underline mb-0.5">Mot de Passe : </label>
            <input type="Password" name="Password" placeholder="Entrez votre mot de passe"
              class="input" required>
          </div>
          <div class="text-center mb-5">
            <input type="submit" value="Se connecter"
              class="btn btn-sm w-36 bg-gradient-to-br variant-gradient-primary-secondary">
          </div>
        </form>
        <div id="access-denied">
          <?php
          if (isset($message)) {
          ?>
            <div class="access-denied">
              <p class="text-red-600 text-center font-bold m-5"><?= $message ?></p>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="text-center m-5">
        <p>Pas de compte ?</p>
        <a href="../Controller/c_sign_up.php" class="underline text-blue-500">Inscrivez-vous ici</a>
      </div>
    </div>
  </main>
</body>

</html>