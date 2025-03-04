<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require('../_partial/_head.php');
    ?>
    <link rel="stylesheet" href="">
</head>
<body>
    <header>
        <img src="../Assets/logo/logo.png" alt="">
    </header>
    <form>
      <div>
          <div>
              <label for="Lastname">Entrez votre Nom</label>
              <input type="text" name="Lastname">
          </div>
          <div>
              <Label for="Firstname">Entrez votre Prénom</Label>
              <input type="text" name="Firstname">
          </div>
          <div>
              <label for="Pseudo">Entrez votre Pseudo</label>
              <input type="Text" name="Pseudo">
          </div>
          <div>
              <label for="Dob">Entrez votre Date de naissance</label>
          </div>
          <div>
              <label for="Mail">Entrer votre Email: </label>
              <input type="Email" name="Email">
          </div>
          <div>
              <label for="Pwd"> Entrer votre Mot de Passe: </label>
              <input type="Password" name="Password"></input>
          </div>
            <input type="submit" value="Connexion"></input>
      </div>
    </form>
</body>
</html>