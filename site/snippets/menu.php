<nav class="navigation column" role="navigation">
  <ul class="menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
      <ul>
        <?php foreach($item->children() as $subitem): ?>
        <li class="menu-sub-item<?= r($subitem->isOpen(), ' is-active') ?>">
          <a href="<?= $subitem->url() ?>"><?= $subitem->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </li>
    <?php endforeach ?>
  </ul>
</nav>