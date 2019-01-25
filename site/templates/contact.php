<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>      
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <div class="c-info grid gutter-1 col-2">
        <div class="column"> 
          <dl>
            <?php foreach($page->openinghours()->toStructure() as $item): ?>
              <dt><?= $item->title()->html() ?></dt>
              <dd><?= $item->text()->html() ?></dt>
            <?php endforeach ?>
          </dl>
        </div>
        <div class="column pull-right"> 
          <?= $page->address()->kirbytext() ?>
        </div>
      </div>
      <hr />      
    </header>
    
    <div class="wrap wide">

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3041.2796645937133!2d8.816318151640239!3d47.22690815582458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9e350e9ca3b839b6!2sGourmet-Ib%C3%A9rico!5e0!3m2!1sde!2sch!4v1547546027852" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
      
    <div class="contact-twitter text wrap cf">
      <?= $page->text()->kirbytext() ?>
    </div>
    
  </main>

<?php snippet('footer') ?>