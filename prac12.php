<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practical 12</title>
</head>
<body>
  <?php
    $str = "The quick brown fox";
    $strArr = mb_split(" ",$str);
    $res = "";
    for($i = 0;$i<sizeof($strArr);$i++){
      $res .= $strArr[$i];
    }
    echo "<br />Initial String: $str";
    echo "<br />Resultant String: $res";
  ?>
</body>
</html>
