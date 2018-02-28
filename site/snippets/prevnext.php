<?php
if($page->hasNextVisible() || $page->hasPrevVisible()): ?>
  <nav>
    <?php if($page->hasNextVisible()): ?>
      <a href="<?= $page->nextVisible()->url() ?>" rel="next" title="<?= $page->nextVisible()->title()->html() ?>"><</a>
    <?php else: ?>
      <span><</span>
    <?php endif ?>

    <?php if($page->hasPrevVisible()): ?>
      <a href="<?= $page->prevVisible()->url() ?>" rel="prev" title="<?= $page->prevVisible()->title()->html() ?>">></a>
    <?php else: ?>
      <span>></span>
    <?php endif ?>

  </nav>
<?php endif ?>