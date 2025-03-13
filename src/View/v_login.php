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

  <main class="grow">
    <div class="flex flex-row justify-around items-center">
      <h1>Connectez vous !</h1>
      <button id="toogle_Theme" type="button" class="btn-icon variant-filled">test</button>
    </div>
    <div>
      <div>
        <form>
          <div>
            <label for="Mail" class="underline">Email : </label>
            <input type="Email" name="Email" placeholder="Entrez votre adresse mail"
              class="input" required>
          </div>
          <div>
            <label for="MDP" class="underline">Mot de Passe : </label>
            <input type="Password" name="Password" placeholder="Entrez votre mot de passe"
              class="input" required>
          </div>
          <input type="submit" value="Se connecter" class="btn bg-gradient-to-br variant-gradient-tertiary-secondary">
        </form>
      </div>
      <div>
        <p>Pas de compte ?</p>
        <a href="../View/v_register.php">Inscrivez-vous ici</a>
      </div>
    </div>
  </main>
</body>

</html>