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
    <!-- petit lien vers le profil de l'utilisateur -->
    <a href="../Controller/c_account.php">mon compte</a>

    <h3>Fil d'actualité</h3>
    <div id="tweet">
      <?php foreach ($posts as $post): ?>
        <div style="border: 1px solid #ccc; margin-bottom: 10px; padding: 10px;">
          <h3>@<?= htmlspecialchars($post['display_name']); ?></h3>
          <p><?= nl2br(htmlspecialchars($post['content'])); ?></p>
          <small>Publié le <?= htmlspecialchars($post['created_at']); ?></small>
        </div>
      <?php endforeach; ?>
    </div>

    <form method="POST" action="../Controller/c_create_tweet.php">
      <textarea name="content" placeholder="Écrivez votre post ici (140 caractères max)"></textarea>
      <button type="submit">Publier</button>
    </form>
  </main>
</body>

</html>