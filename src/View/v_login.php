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
        <form>
          <div class="flex flex-col items-center">
            <label for="Mail" class="underline mb-0.5">Email : </label>
            <input type="Email" name="Email" placeholder="Entrez votre adresse mail" required
              class="border rounded-lg w-72 p-1.5 mb-1">
          </div>
          <div class="flex flex-col items-center mb-5">
            <label for="MDP" class="underline mb-0.5">Mot de Passe : </label>
            <input type="Password" name="Password" placeholder="Entrez votre mot de passe" required
              class="border rounded-md w-72 p-1.5 mb-1"></input>
          </div>
          <input type="submit" value="Se connecter"
            class=" bg-blue-600 text-white border border-black rounded-lg w-72 pt-1.5 pr-8 pb-1.5 pl-8">
        </form>
      </div>
      <div class="text-center m-5">
        <p>Pas de compte ?</p>
        <a href="../View/v_register.php" class="text-blue-500 border-blue-800 underline">Inscrivez-vous ici</a>
      </div>
    </div>
  </main>
</body>

</html>