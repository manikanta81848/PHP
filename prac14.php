<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: sans-serif; }

    .container { display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding-top: 20px; height: 100vh; gap: 10px; }

    form { display: flex; flex-direction: column; gap: 10px; }

    input[type="text"] { border-radius: 10px; padding: 10px; }
  </style>
  <title>Practical 14</title>
</head>

<body>
  <div class="container">
    <form action="" method="post">
      <label for="palStr">
        <h1 style="text-shadow: 1px 1px 2px #120E43;color: #FF6263;">Enter string to be checked : </h1>
      </label>
      <input type="text" name="palStr" id="palStr">
    </form>
    <?php
      $palStr = "";
      extract($_POST);
      if(strlen($palStr) == 0){
        echo "<br />Enter a string to check for palindrome";
      }else{
      $checkStr = "";
      for ($i=strlen($palStr)-1; $i >= 0; $i--) { 
        $checkStr .= $palStr[$i];
      }
      if($checkStr === $palStr){
        echo "<br />Given string is a palindrome";
      }else{
        echo "<br />Given string is not a palindrome";
      }}
    ?>
  </div>
</body>
</html>
