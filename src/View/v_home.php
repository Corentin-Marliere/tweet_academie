<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faccovi - Page d'acceuil</title>
</head>
<body>

<header>
  <a href=""><img src="" alt="#"></a>  <!--NPO changé les liens-->
  <img src="../../public/Assets/logo/short_logo.png">
  <a href="../View/v_search.php" alt="redirection_to_search_page">SR</a>
</header>

<main>

  <h1>Fil d'actualité</h1>
  <a href=""><img src="" alt=""></a> <!--NPO changé les liens search button-->
  <a href=""><img src="" alt=""></a> <!-- message button to go into dms-->

  <?php include('../_partial/_tweet.php') ?>

  <?php include('../_partial/_tweet.php') ?>

  <?php include('../_partial/_tweet.php') ?>

  <form>
  <input type="submit" value="+"></input>
  </form>

</main>
</body>

</html>