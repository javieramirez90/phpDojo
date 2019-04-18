<?php
  // Creating variables
  $name = 'Xavier';
  $age = 30;

  //Creating constants: they can not be overwritten
  define('LASTNAME', 'Ramírez');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Lesson</title>
</head>
<body>
  <h1><?php echo 'First time with PHP';?></h1>
  <div><?php echo $name;?></div>
  <div><?php echo LASTNAME; ?></div>
  <div><?php echo $age; ?></div>
</body>
</html>