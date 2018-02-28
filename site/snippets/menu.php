<nav role="navigation">
	<a href="<?= url() ?>" rel="home" align="right"><?= $site->title()->html() ?></a> /
    <?php foreach($pages->visible() as $item): ?>
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a> /
    <?php endforeach ?>
</nav>