<?php snippet('header') ?>

  <main role="main">
    
    <article>
      <h1><?= $page->title()->html() ?></h1>
      <?= $page->date('F jS, Y') ?>
      <hr />
      <?= $page->text()->kirbytext() ?>
    </article>
    
    <hr>

    <?php snippet('prevnext') ?>
  
  </main>

<?php snippet('footer') ?>