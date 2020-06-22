<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>
  
    <section class="projects-section">
      
      <div class="wrap wide">
        <h2>TOP STORYS</h2>
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="projects-section-more"><a href="" class="btn">Alle zeigen &hellip;</a></p>
      </div>
      
    </section>

    <div class="wrap">
      <h2></h2>

      <ul class="socialfeed grid gutter-1">
      <?php
      $counter = 0;
      foreach($socialfeed->data as $feed ){
        snippet('feeditem', ['feed' => $feed]);
        $counter++;
        if( $counter > 11){
          break;
        }
      }
      ?>
      </ul>
    </div>

  </main>

<?php snippet('footer') ?>