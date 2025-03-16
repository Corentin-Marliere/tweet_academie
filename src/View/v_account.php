<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../../public/scripts/update_account.js" defer></script>
  <title>Document</title>
</head>
<body>
  <main>
    <h3>Mon compte</h3>
    <article>
      <div id="user-info">
        <h4>Pseudo : <?= htmlspecialchars($user['username']) ?></h4>
        <h5>Pseudo afficher : <span id="display-name"><?= htmlspecialchars($user['display_name']) ?></span></h5>
        <p>Bio : <span id="bio"><?= htmlspecialchars($user['bio']) ?></span></p>
        <p>Email : <span id="email"><?= htmlspecialchars($user['email']) ?></span></p>
        <p>Date de naissance : <?= htmlspecialchars($user['date_of_birth'])?></p>
        <button id="edit-button">Modifier</button>
      </div>
      <form id="edit-form" style="display: none;" method="POST" action="../Controller/c_account_setting.php">
        <label for="new-display-name">Pseudo afficher :</label>
        <input type="text" id="new-display-name" name="new-display-name" value="<?= htmlspecialchars($user['display_name']) ?>" />
        <label for="new-bio">Bio :</label>
        <input type="text" id="new-bio" name="new-bio" value="<?= htmlspecialchars($user['bio']) ?>" />
        <button type="submit" id="save-button">Enregistrer</button>
      </form>
    </article>
    <a href="../Controller/c_home_page.php">home</a>
  </main>
</body>
</html>