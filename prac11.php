<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    *{margin: 0; padding: 0;box-sizing: border-box; font-family: sans-serif;}
    .container{ display: flex; justify-content: center; align-items: center; min-height: 100vh; flex-direction: column;}
  </style>
  <title>Practical 11</title>
</head>

<body>
  <div class="container">
    <form action="" method="post">
      <label for="str">
        <h2>Enter the container string : </h2>
      </label>
      <input type="text" name="str" id="str" />
      <label for="keyStr">
        <h2>Enter the key string : </h2>
      </label>
      <input type="text" name="keyStr" id="keyStr" /><br>
      <input type="submit" value="SUBMIT">
    </form>

    <?php
      $str = $keyStr = "";
      extract($_POST);
      if($str == ""){
        echo "<h5>Enter a string first!</h5>";
      }else{
        if(str_contains($str,$keyStr)){
          echo "<h5>Given string contains the key</h5>";
        }else{
          echo "<h5>Given string doesn't contain the key</h5>";
        }
      }
      
    ?>
  </div>
</body>
</html>
