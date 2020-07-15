<?php

$stories = [];

foreach($pages->visible() as $item){

  if( $item->topstory() == "1" ){
    $stories[] = $item;
  }
  foreach($item->children()->visible() as $subitem){
    if( $subitem->topstory() == "1" ){
      $stories[] = $subitem;
    }
  }

}



?>
<?php if($stories != false): ?>
<ul class="showcase grid gutter-1">

  <?php foreach($stories as $story): ?>

    <li class="showcase-item column">
        <a href="<?= $story->url() ?>" class="showcase-link">
          <?php if($image = $story->coverimage()->toFile()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $story->title()->html() ?>" class="showcase-image" />
          <?php endif ?>
          <div class="showcase-caption">
            <h3 class="showcase-title"><?= $story->title()->html() ?></h3>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>
<?php endif; ?>