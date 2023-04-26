<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: sans-serif; }

    .container { display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding-top: 20px; height: 100vh; gap: 10px; }

    form { display: flex; flex-direction: column; gap: 10px; }

    input[type="number"] { border-radius: 10px; padding: 10px; }
  </style>
  <title>Practical 5</title>
</head>

<body>
  <div class="container">
    <form action="" method="post">
      <label for="num">
        <h1 style="text-shadow: 1px 1px 2px #120E43;color: #FF6263;">Enter number to be checked : </h1>
      </label>
      <input type="number" name="num" id="num" min="1">
    </form>
    <?php
      primeCheck($_POST);
      function primeCheck($array = 0){
        $num = 0;
        extract($array);
        if($num == 2 or $num == 3){
          echo "<h1>$num is Prime!</h1>";
          return;
        }
        for ($i=2; $i <= $num/2; $i++) { 
          if($num % $i == 0){
            echo "<h1>$num is Not Prime!</h1>";
            return;
          }
        }
        echo "<h1> $num is Prime!</h1>";
      }
    ?>

  </div>
</body>
</html>
