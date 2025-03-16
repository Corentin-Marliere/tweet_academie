<!DOCTYPE html>
<html lang="fr" class="light">

<head>
  <link rel="stylesheet" href="../../dist/styles.css">

  <?php include('../_partial/_head.php') ?>
  <script src="../../public/scripts/update_account.js" defer></script>


  <title>Faccovi - Mon compte</title>
</head>

<body data-theme="modern">
  <?php include('../_partial/_header.php') ?>

  <main>
    <h3 class="text-center text-2xl m-5">Mon compte :</h3>
    <article class=" card bg-gradient-to-br variant-gradient-primary-secondary p-4 m-5">
      <div class="flex justify-end mr-5">
        <button class="btn-icon bg-gradient-to-br variant-gradient-secondary-tertiary w-10" id="edit-button"><img class="w-8" src="../../public/Assets/images/modification.png" alt=""></button>
      </div>
      <div id="user-info">
        <div class="flex">
          <p class="underline font-bold mr-3 mb-3">Pseudo :</p>
          <span><?= htmlspecialchars($user['username']) ?></span>
        </div>
        <div class="flex">
          <p class="underline font-bold mr-3 mb-3">Pseudo afficher :</p>
          <span id="display-name"><?= htmlspecialchars($user['display_name']) ?></span>
        </div>
        <div class="flex">
          <p class="underline font-bold mr-3 mb-3">Bio :</p>
          <span id="bio"><?= htmlspecialchars($user['bio']) ?></span>
        </div>
        <div class="flex">
          <p class="underline font-bold mr-3 mb-3">Email :</p>
          <span id="email"><?= htmlspecialchars($user['email']) ?></span>
        </div>
        <div class="flex">
          <p class="underline font-bold mr-3 mb-3">Date de naissance :</p>
          <span><?= htmlspecialchars($user['date_of_birth']) ?></span>
        </div>
      </div>
      <form id="edit-form" style="display: none;" method="POST" action="../Controller/c_account_setting.php">
        <div class="flex flex-col mb-5">
          <label for="new-display-name" class="underline font-bold mb-1">Pseudo afficher :</label>
          <input type="text" id="new-display-name" name="new-display-name" value="<?= htmlspecialchars($user['display_name']) ?>"
          class="input text-black dark:text-white mb-3" />
          <label for="new-bio" class="underline font-bold mb-1">Bio :</label>
          <input type="text" id="new-bio" name="new-bio" value="<?= htmlspecialchars($user['bio']) ?>"
          class="input text-black dark:text-white" />
        </div>
        <div class="flex justify-center">
          <button class="btn-sm bg-gradient-to-br variant-gradient-secondary-tertiary" type="submit" id="save-button">Enregistrer</button>
        </div>
      </form>
    </article>
    <div id="follower">
    <h3>Me suivent :</h3>
    <?php if (!empty($followers)): ?>
        <?php foreach ($followers as $follower): ?>
            <p>@<?= htmlspecialchars($follower['display_name']); ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun follower pour le moment.</p>
    <?php endif; ?>
  </div>
  <div id="following">
    <h3>Je suis :</h3>
    <?php if (!empty($following)): ?>
        <?php foreach ($following as $followingUser): ?>
            <p>@<?= htmlspecialchars($followingUser['display_name']); ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Vous ne suivez personne pour le moment.</p>
    <?php endif; ?>
  </div>
    <div class="flex justify-center">
      <button class="btn bg-gradient-to-br variant-gradient-secondary-tertiary">
        <a href="../Controller/c_home_page.php">home</a></button>
    </div>
  </main>
</body>

</html>