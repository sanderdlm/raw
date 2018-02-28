<?php 
if($pagination->hasPages()): ?>
  <nav>

    <?php if($pagination->hasPrevPage()): ?>
      <a href="<?= $pagination->prevPageURL() ?>" rel="prev" title="newer articles"><</a>
    <?php else: ?>
      <span><</span>
    <?php endif ?>

    <?php if($pagination->hasNextPage()): ?>
      <a href="<?= $pagination->nextPageURL() ?>" rel="next" title="older articles">></a>
    <?php else: ?>
      <span>></span>
    <?php endif ?>

  </nav>
<?php endif ?>