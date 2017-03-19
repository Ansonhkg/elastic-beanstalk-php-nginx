<?php
include "./version.php";
date_default_timezone_set('UTC');
?>
<html>
  <head>
    <title>Elastic Beanstalk Blue Green Test <?php echo $version?></title>
  </head>
  <body>
    <h1>Blue Green Test <?php echo $version?></h1>
    <h3><?php echo `hostname` . " | " . $_SERVER["SERVER_ADDR"] . " | " . date("c")?></h3>
  </body>
</html>