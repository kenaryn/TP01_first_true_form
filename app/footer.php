<footer>
  <?php
  // Print nav bar only for other pages than index.php
  if ($_SERVER['REQUEST_URI'] != '/index.php') {
  ?>
    <p><a href="./index.php">Return home</a></p>
  <?php
  }
  ?>
</footer>

</body>
</html>