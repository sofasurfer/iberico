<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <hr />
    </header>
    <div class="text wrap">
      <table class="shop">    
        <tr>
          <th>Name</th>
          <th>Preis</th>
          <th>Menge</th>
        </tr>
      <?php
      $file = $page->documents()->first();
      if (($handle = fopen($file, "r")) !== FALSE) {
          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $data = array_map("utf8_encode", $data);
            if( is_numeric($data[4]) ){
              $price = number_format((float)$data[4], 2, '.', '');
              echo '<tr><td>'.$data[2].'</td><td>'.$price.'</td><td><input min="1" class="shopitem" data-price="'.$data[4].'" max="900" value="'.$data[1].'-'.$data[2].'" type="number" /></td></tr>';
            }
          }
          fclose($handle);
      }

      ?>
      <tr>
        <td id="shop-total" colspan="3">150.00 chf</td>
      </table>
    </div>
  </main>

<?php snippet('footer') ?>