<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="stylesheet" href="../../dist/styles.css">
  <?php include('../_partial/_head.php') ?>
  <title>Faccovi - Connexion</title>
</head>

<body>
  <header class="flex justify-center">
    <img class="w-44" src="../../public/Assets/logo/logo.png" alt="">
  </header>

  <main>
    <h1 class="text-center font-bold text-2xl">Connectez vous !</h1>
    <div>
    <div class="flex flex-col text-center items-center m-5">
      <form class="mb-5" method="POST" action="../Controller/c_check_log_in.php">
        <div class="flex flex-col items-center mb-4">
          <label for="Mail" class="underline mb-2">Entrer votre Email : </label>
          <input type="Email" name="Email" placeholder="mon.adresse@mail.com" required
              class="border rounded-lg w-72 p-1.5">
        </div>
        <div class="flex flex-col items-center mb-5">
          <label for="MDP" class="underline mb-2"> Entrer votre Mot de Passe : </label>
          <input type="Password" name="Password" placeholder="Mot de passe" required
              class="border rounded-md w-72 p-1.5"></input>
        </div>
        <input type="submit" value="Se connecter" class="rounded-lg pt-2 pr-8 pb-2 pl-8 bg-blue-600"></input>
      </form>
      <div id="access-denied">
        <?php
            if(isset($message)) {
                ?>
            <div class="access-denied">
                <p><?= $message ?></p>
            </div>
            <?php
            }
            ?>
        </div>
      <div class="m-5">
        <p>Pas de compte?</p>
        <a href="../Controller/c_sign_up.php" class="text-blue-500 border-blue-800 underline">Inscrivez-vous ici!</a>
      </div>
    </div>
  </main>
</body>

</html>