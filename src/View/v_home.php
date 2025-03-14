<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faccovi - Page d'acceuil</title>
</head>
<body>

<header>
  <img src="../../public/Assets/logo/short_logo.png">
</header>

<main>

  <h1>Fil d'actualité</h1>

  <div id="tweet">

  </div>

  <form method="POST" action="../Controller/c_create_tweet.php">
    <input type="text" name="tweet" id="" maxlength="140">
    <input type="submit" value="Tweet"></input>
  </form>

</main>
</body>

</html>