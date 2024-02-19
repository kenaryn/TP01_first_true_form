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
$std_deviation = calc_standard_deviation($average, $ranks);
?>

<article class="results">
  <p>Sum: <?=$sum?></p>
  <p>Average: <?=$average?></p>
  <p>Standard deviation: <?=$std_deviation?></p>
</article>

<?php
$movies = [
  'collection_name' => 'movies',
  'data' => ['
    The Shawshank Redemption', 'The Godfather', 'The Dark Knight', 'The Lord of the Rings: The return of the king', 'Pulp Fiction'
  ]
];

$db_movies = [
  // 'collection_name' => 'movies',
  // 'data' => [
    'The Shawshank Redemption' => ['filmmaker' => 'Frank Darabont', 'year' => 1994, 'scoring' => 9.2],
    'The Godfather' => ['filmmaker' => 'Francis Ford Coppola', 'year' => 1972, 'scoring' => 9.1],
    'The Dark Knight' => ['filmmaker' => 'Christopher Nolan', 'year' => 2008, 'scoring' => 9.0],
    'The Lord of the Rings: The return of the king' => ['filmmaker' => 'Peter Jackson', 'year' => 2003, 'scoring' => 8.9],
    'Pulp Fiction' => ['filmmaker' => 'Quentin Tarantino', 'year' => 1994, 'scoring' => 8.9],
  // ]
];
?>

<!-- ex 5 -->
<h3>DB movies</h3>

<ul>
<?php
foreach ($db_movies as $key => $value) {
  ?>
  <li><strong><?=$key?></strong><ul>
  <?php
  foreach ($value as $k => $v) {
    ?>
    <li><?=$k?>: <?=$v?></li>
    <?php
  }
  ?>
  </ul>
<?php
}
?>
</ul>

<?php
print_arr_values($movies);

$eleanor = [
  'collection_name' =>'eleanor',
  'data' => [
    'fname' => 'Eleanor',
    'lname' => 'of Aquitain',
    'age' => 24,
    'nationality' => 'french'
  ]
];

$aurele = [
  'collection_name' => 'aurele',
  'data' => [
    'fname' => 'Aurele',
    'lname' => 'plazz',
    'age' => 39,
    'nationality' => 'aerynth'
  ]
];

$muammar = [
  'collection_name' => 'muammar',
  'data' => [
    'fname' => 'muammar',
    'lname' => 'al-Qaddafi',
    'age' => 69,
    'nationality' => 'libya'
  ]
];

$individuals = [$eleanor, $aurele, $muammar];

print_collection($individuals);
?>

</main>

<?php
include_once './footer.php';
?>