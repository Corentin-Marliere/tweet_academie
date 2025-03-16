<!DOCTYPE html>
<html lang="fr" class="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../dist/styles.css">
  <script src="../../public/scripts/create_tweet.js"></script>

  <title>Faccovi - Page d'acceuil</title>
</head>

<body data-theme="modern">
  <?php include('../_partial/_header.php') ?>

  <main>
    <div class="flex flex-row justify-around items-center">
      <div>
        <h1>Fil d'actualité</h1>
      </div>
      <div class="flex flex-row">
        <a href=""><img src="../../public/Assets/images/send.png" alt="Envoyer un message"
            class="w-5 m-3"></a> <!--NPO changé les liens search button-->
        <a href=""><img src="../../public/Assets/images/search.png" alt="Faire une recherche"
            class="w-5 m-3"></a> <!-- message button to go into dms-->
      </div>
    </div>

    <?php foreach ($posts as $post): ?>
      <div style="border: 1px solid #ccc; margin-bottom: 10px; padding: 10px;">
        <h3>@<?= htmlspecialchars($post['display_name']); ?></h3>
        <p><?= nl2br(htmlspecialchars($post['content'])); ?></p>
        <small>Publié le <?= htmlspecialchars($post['created_at']); ?></small>
      </div>
    <?php endforeach; ?>

    <div id="tweet">
      <?php ?>
    </div>
    
    <div class="min-w-screen flex flex-row justify-between">
      <div>
        <button id="tweet_btn" class="btn-icon variant-filled-primary w-12">
          <img src="../../public/Assets/images/creer.png" alt=""
            class="w-10">
        </button>
      </div>
      <div>
        <form id="tweet_form" method="POST" action="../Controller/c_create_tweet.php" hidden>
          <textarea name="content" placeholder="Écrivez votre post ici (140 caractères max)"
            class="input"></textarea>
          <input type="submit" value="Publier"
            class="input">
        </form>
      </div>
    </div>
  </main>

</body>

</html>