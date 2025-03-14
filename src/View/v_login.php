<!DOCTYPE html>
<html lang="fr" class="light">

<head>
  <link rel="stylesheet" href="../../dist/styles.css">

  <?php include('../_partial/_head.php') ?>
  <script src="../../public/scripts/toggle_theme.js"></script>

  <title>Faccovi - Connexion</title>
</head>

<body class="flex flex-col" data-theme="wintry">
  <header class="flex flex-row justify-center">
    <img src="../../public/Assets/logo/logo.png" alt=""
      class="w-44">
  </header>

  <main class="flex flex-col">
    <div class="flex flex-row justify-around items-center mb-5">
      <h1>Connectez vous !</h1>
      <button id="toogle_Theme" type="button" class="btn-icon variant-filled">test</button>
    </div>
    <div>
      <div class="flex flex-col items-center">
        <form>
          <div>
            <label for="Mail" class="underline mb-0.5">Email : </label>
            <input type="Email" name="Email" placeholder="Entrez votre adresse mail"
              class="input" required>
          </div>
          <div>
            <label for="MDP" class="underline">Mot de Passe : </label>
            <input type="Password" name="Password" placeholder="Entrez votre mot de passe"
              class="input" required>
          </div>
          <div class="text-center">
            <input type="submit" value="Se connecter" class="btn btn-sm w-36 bg-gradient-to-br variant-gradient-tertiary-secondary">
          </divu>
        </form>
      </div>
      <div class="text-center">
        <p>Pas de compte ?</p>
        <a href="../View/v_register.php" class="underline text-blue-500">Inscrivez-vous ici</a>
      </div>
    </div>
  </main>
</body>

</html>