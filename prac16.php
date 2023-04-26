<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practical 16</title>
</head>
<body>
  <?php 
    $arr = array("RaspbianOS","Android","IOS","Fedora","Ubuntu","RedHatLinux","Windows");
    echo "<ul>";
    foreach ($arr as $item) {
      echo "<li>$item</li>";
    }
    echo "</ul>";
  ?>
</body>
</html>
