<?php
declare(strict_types=1);

function calc_sum(array $arr): float {
  /**
   * Calculates the sum of all values in an array.
   */
  $sum = 0;
  foreach ($arr as $val) {
    $sum += $val;
  }
  return $sum;
}

function calc_average(array $arr): float {
  /**
   * Calculates average's values of an array and return it.
   */
  $sum = calc_sum($arr);
  return $sum / count($arr);
}

function calc_standard_deviation(float $average, array $arr) :float {
  $std_deviation_arr = [];
  foreach ($arr as $val) {
    // array_push($std_deviation_arr, abs($val - $average));
    array_push($std_deviation_arr, pow($val - $average, 2));
  }
  // print_r($std_deviation_arr);
  $sum = calc_sum($std_deviation_arr);
  // echo '<p>Sum: '.$sum.'</p>';
  return sqrt($sum / count($std_deviation_arr));
}

function print_arr_values (array $arr): void {
  /**
   * Print a name's collection then each item prefixed with its index.
   */
  echo '<h4>'.$arr['collection_name'].'</h4>';
  foreach ($arr['data'] as $key => $val) {
  ?>
  <p><?=$key?>: <?=$val?></p>
  <?php
  }
}

function print_collection(array $arr): void {
  /**
   * Print each item's arrays embedded in a array.
   */
  foreach ($arr as $key => $value) {
    echo '<h4>'.$value['collection_name'].'</h4>';
    foreach ($value['data'] as $k => $v) {
      ?>
      <p><?=$k?>: <?=$v?></p>
      <?php
    }
  }
}
?>