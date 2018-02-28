<?php snippet('header') ?>

  <main role="main">

      <h1><?= $page->title()->html() ?></h1>
      <?= $pagination->page() == 1 ? $page->text()->kirbytext() : '';?>
      <hr>

    <section>
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article>

              <h2><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h2>
              <p class="article-date"><?= $article->date('F jS, Y') ?></p>
              <p>
                <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                <a href="<?= $article->url() ?>" class="article-more">read more</a>
              </p>

          </article>
          <hr>

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </section>

    <?php snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>