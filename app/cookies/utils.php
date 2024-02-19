<?php

function print_custom_news (array $arr, int $amount): void {
  /**
   * Prints a custom number of news.
   *  */ 
  for ($i = 0; $i < $amount; $i++) {
    ?>
    <p><?=$arr[$i]?></p>
    <?php
  }
}

?>