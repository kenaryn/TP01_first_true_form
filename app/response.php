<?php
declare(strict_types=1);
include_once './header.php';
?>

<?php
if (isset($_POST)) {
  $php_level = (isset($_POST['php-beginner']) && (strip_tags($_POST['php-beginner']) == 'on')) ? 'begins in PHP' : 'knows a bit about PHP';
  ?>
  <p>Here are the results of your inquiry:</p>
    <p><?=strip_tags($_POST['courtesy'])?> <?=strip_tags($_POST['lname'])?> <?=strip_tags($_POST['fname'])?></p>
    <p>You are born in <?=strip_tags($_POST['birth-year'])?></p>
    <p>You have choosen to be known as <?=strip_tags($_POST['identifier'])?></p>
    <p>Your pass word has been hacked: <strong><?=strip_tags($_POST['password'])?></strong></p>
    <p>You are a <?=strip_tags($_POST['sex'])?> who <?=$php_level?>.</p>
  <?php
}
// Capitalize all fields.
?>
<?php
include_once './footer.php';
?>