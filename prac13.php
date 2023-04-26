<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practical 13</title>
</head>
<body>
  <?php
    $str = "The quick brown fox jumps over the lazy dog.";
    echo "<br />Initial String: $str";
    $str = str_replace("The","That",$str);
    echo "<br />Resultant String: $str";
  ?>
</body>
</html>