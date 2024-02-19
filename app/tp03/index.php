<?php
declare(strict_types=1);
include_once './header.php';
require './utils.php';
?>

<main>
  <h3>Uni-dimensional array</h3>
<?php
$arr1[0] = 2024;
$arr1[1] = "devweb-24-s01";
$arr1[] = "11.12";
array_push($arr1, "L3-alternance-cnam");

?>
<?php
foreach ($arr1 as $key => $val) {
  ?>
  <p><?=$key?>: <?=$val?></p>
  <?php
}
?>

<h3>Bi-dimensional array</h3>
<?php
$arr2[0][0] = 12;
$arr2[0][1] = "JS";
$arr2[1][0] = "Steel";
$arr2[1][1] = 432.11;
array_push($arr2[1],42 );

array_push($arr2,[5=>'z'] );
// var_dump($arr2);
foreach ($arr2 as $key => $val) {
  ?>
  <h1>[<?=$key?>]</h1>
  <ul>
  <?php
  // var_dump($val);
  foreach ($val as $k => $v) {
    ?>
    <li>[<?=$key?>][<?=$k?>]: <?=$v?></li>
  <?php
  }
  echo "</ul>";
}

$ranks = [0, 1, 2, 3, 4, 5, 6, 6.5];
$sum = calc_sum($ranks);
$average = calc_average($ranks);
$std_deviation = calc_std_deviation($average);
?>

<article class="results">
  <p>Sum: <?=$sum?></p>
  <p>Average: <?=$average?></p>
  <p>Standard deviation: <?=std_deviation?></p>
</article>
</main>

<?php
include_once './footer.php';
?>