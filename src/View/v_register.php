<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="stylesheet" href="../../dist/styles.css">
  <?php include('../_partial/_head.php'); ?>
  <title>Faccovi - Inscription</title>
</head>

<body>
  <header class="flex justify-center">
    <img class="w-48" src="../../public/Assets/logo/logo.png" alt="">
  </header>

  <main>
    <h3 class="text-center font-bold text-2xl mb-12">Créez un compte:</h3>
    <div class="flex flex-col">
      <form>
        <div class="flex">
          <label for="Lastname" class="underline mb-2">Nom :</label>
          <input type="text" name="Lastname" required
            class="border rounded-lg w-72 p-1.5" placeholder="Entrez votre nom">
        </div>
        <div>
          <Label for="Firstname">Entrez votre Prénom</Label>
          <input type="text" name="Firstname" required
            class="border rounded-lg w-72 p-1.5">
        </div>
        <div>
          <label for="Pseudo">Entrez votre Pseudo</label>
          <input type="Text" name="Pseudo" required
            class="border rounded-lg w-72 p-1.5">
        </div>
        <div>
          <label for="Dob">Entrez votre Date de naissance</label>
          <input type="datetime" name="Dob" required
            class="border rounded-lg w-72 p-1.5">
        </div>
        <div>
          <label for="Mail">Entrer votre Email: </label>
          <input type="Email" name="Email" required
            class="border rounded-lg w-72 p-1.5">
        </div>
        <div>
          <label for="Pwd"> Entrer votre Mot de Passe: </label>
          <input type="Password" name="Password" required
            class="border rounded-lg w-72 p-1.5">
        </div>
        <input type="submit" value="Register"
          class="border rounded-lg w-72 p-1.5">
      </form>
      <p>Vous avez un compte?</p>
      <a href="../View/v_login.php">Connectez vous içi!</a>
    </div>
  </main>
</body>

</html>