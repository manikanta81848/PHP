<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    *{margin: 0; padding: 0;box-sizing: border-box; font-family: sans-serif;}
    .container{ display: flex; justify-content: center; align-items: center; min-height: 100vh; text-align: center; flex-direction: column;}
  </style>
  <title>Practical 10</title>
</head>
<body>
  <div class="container">
    <form action="" method="post">
      <label for="str">
        <h1>Enter the string to be checked for lowercase: </h1>
      </label>
      <input type="text" name="str" id="str"/>
      <input type="submit" value="SUBMIT">
    </form>
    <?php
      $str = '';
      extract($_POST);
      if(ctype_lower($str)){
         echo "<h5>Given string has all lowercase letters</h5>";
      }else{
        echo "<h5>Given string does not  have all lowercase letters</h5>";
      }
    ?>
  </div>
</body>
</html>
