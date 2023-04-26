<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: sans-serif; }
    .container{ display: flex; justify-content: center; align-items: center; flex-direction: column; min-height: 100vh; }
  </style>
  <title>Practical 9</title>
</head>

<body>
  <div class="container">
    <?php
      $var1 = 123;
      $var2 = "123";
      echo "<h1>Variable 1: $var1<br/>Variable 2: \"$var2\"</h1>";
      if($var1 == $var2){
        echo "Variables are equivalent";
      }else{
        echo "Variables are not equivalent";
      }

      if($var1 === $var2){
        echo "<br />Variables are identical";
      }else{
        echo "<br />Variables are not identical";
      }
    ?>
  </div>
</body>
</html>
