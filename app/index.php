<?php
declare(strict_types=1);
include_once './header.php';
?>

<main>
<form id="identity-form" method="post" action="./response.php">
  <select name="courtesy">
    <option value="Mme" selected>Mme</option>
    <option value="M.">M.</option>
  </select>&nbsp;
  <label for="lname">Last name: </label>
  <input type="text" id="lname" name="lname" placeholder="Last name"><br>
  <label for="fname">First name: </label>
  <input type="text" id="fname" name="fname" placeholder="First name"><br>
  <label for="birth-year">Birth year: </label>
  <input type="number" id="birth-year" name="birth-year" placeholder="Birth year" min="1900" max="2023" minlength="1" maxlength="4"><br>
  <label for="identifier">Identifier: </label>
  <input type="text" id="identifier" name="identifier" placeholder="Identifier"><br>
  <label for="password">Password: </label>
  <input type="password" id="password" name="password" placeholder="password" minlength="6"><br>
  <label>Sex: </label>
  <input type="radio" id="male" name="sex" value="male" checked>
  <label for="male" class="radio-btn">Male</label>
  <input type="radio" id="female" name="sex" value="female">
  <label for="female" class="radio-btn">female</label><br>
  <label for="php-beginner">Php beginner</label>
  <input type="checkbox" id="php-beginner" name="php-beginner" checked><br>

  <button type="submit" id="confirm-btn">Confirm</button>
</form>  
</main>

<?php
include_once './footer.php';
?>