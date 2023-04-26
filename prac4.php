<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
        *{
            margin: 0; padding: 0; box-sizing: border-box; font-family: sans-serif;
        }
        .container{
            display: flex; flex-direction: column; justify-content: center; align-items: center;
            text-align: center; padding-top: 20px; height: 100vh; gap: 10px;
        }
        form{
        	display: flex; flex-direction: column;
        	gap: 10px;
        }
        input[type="number"]{
            border-radius: 10px; padding: 10px;
        }
	</style>
  <title>Practical 4</title>
</head>

<body>
  <div class="container">
    <form action="" method="post">
      <label for="count">
        <h1 style="text-shadow: 1px 1px 2px #120E43;color: #FF6263;">Enter number of odd numbers : </h1>
      </label>
      <input type="number" name="count" id="count" min="0" max="1000">
    </form>
    <?php
    $count = 0;
    $sum = 0;
    extract($_POST);
    if($count != 0){
      for($i=0;$i<$count;$i++){
        $sum += 2*($i)+1;
      }
    }
    echo "<h1>SUM = $sum</h1>";
    ?>
  </div>
</body>

</html>
