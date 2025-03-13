<!DOCTYPE html>
<html lang="fr">

<head>

<link rel="stylesheet" href="../../dist/styles.css">

  <?php include('../_partial/_head.php'); ?>
  <title>Faccovi - Inscription</title>
</head>

<body>
  <header class="flex justify-center">
    <img class="w-44" src="../../public/Assets/logo/logo.png" alt="">
  </header>

  <main>
    <h3 class="text-center font-bold text-2xl mb-5">Créer un compte :</h3>
    <div class="flex flex-col w-full">
      <form method="POST" action="../Controller/c_create_user.php">
        <div class="flex flex-col items-center mb-5">
          <label for="Pseudo" class="underline mb-0.5">Pseudo :</label>
          <input type="Text" name="Pseudo" required
            class="border rounded-lg w-72 p-1.5 mb-1" placeholder="Entrez votre pseudo">
          <label for="date_of_birth" class="underline mb-0.5">Date de naissance :</label>
          <input type="date" name="date_of_birth" required
            class="border rounded-lg w-72 p-1.5 mb-1" placeholder="Entrez votre date de naissance">
          <label for="Mail" class="underline mb-0.5">Email : </label>
          <input type="Email" name="Email" required
            class="border rounded-lg w-72 p-1.5 mb-1" placeholder="Entrez votre e-mail">
          <label for="Pwd" class="underline mb-0.5">Mot de Passe :</label>
          <input type="Password" name="Password" required
            class="border rounded-lg w-72 p-1.5 mb-1" placeholder="Créez votre mot de passe">
        </div>
        <div class="text-center">
          <input type="submit" value="Register"
            class=" bg-blue-600 text-white border border-black rounded-lg w-72 pt-1.5 pr-8 pb-1.5 pl-8">
        </div>
      </form>
      <div id="access-denied">
        <?php
            if(isset($messageEmail)) {
                ?>
            <div class="access-denied">
                <p><?= $messageEmail ?></p>
            </div>
            <?php
            }
        ?>
        <?php
            if(isset($messageAge)) {
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
  </main>
</body>

</html>