<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->text()->kirbytext() ?>
      </div>
      <div class="downloads">
        <?php foreach( $page->documents() as $file): ?>
          <a href="<?= $file->url(); ?>" class="btn" target="_blank"><?= $file->filename(); ?></a>
        <?php endforeach ?>
      </div>
      <hr />
    </header>
      
    <div class="wrap wide">    
      <?php snippet('showcase') ?>
    </div>

  </main>

<?php snippet('footer') ?>