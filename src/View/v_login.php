<!DOCTYPE html>
<html lang="fr" class="light">

<head>
  <link rel="stylesheet" href="../../dist/styles.css">

  <?php include('../_partial/_head.php') ?>
  <script src="../../public/scripts/toggle_theme.js"></script>

  <title>Faccovi - Connexion</title>
</head>

<body class="flex flex-col min-h-screen" data-theme="wintry">
  <header class="flex flex-row justify-center">
    <img src="../../public/Assets/logo/logo.png" alt=""
      class="w-44">
  </header>

  <main class="flex flex-col grow justify-center">
    <div class="flex flex-row justify-center items-center mb-5">
      <h1 class="text-xl mr-5">Connectez vous !</h1>
      <button id="toogle_Theme" type="button" class="btn-icon variant-ghost-surface w-auto ml-5">
        <img src="../../public/Assets/images/brightness-and-contrast.png" alt=""
          class="w-5"></button>
    </div>
    <div>
      <div class="flex flex-col items-center">
        <form>
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
            <input type="submit" value="Se connecter" class="btn btn-sm w-36 bg-gradient-to-br variant-gradient-tertiary-secondary">
            </div>
        </form>
      </div>
      <div class="text-center m-5">
        <p>Pas de compte ?</p>
        <a href="../View/v_register.php" class="underline text-blue-500">Inscrivez-vous ici</a>
      </div>
    </div>
  </main>
</body>

</html>