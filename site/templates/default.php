<?php snippet('header') ?>

  <main role="main">
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
  </main>

<?php snippet('footer') ?>