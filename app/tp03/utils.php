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

function calc_standard_deviation(float $average) :float {
  $std_deviation = 0.0;
  return $std_deviation;
}
?>