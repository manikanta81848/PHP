<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practical 15</title>
</head>
<body>
  <?php
  $arr = array(9,2,6,3,5,4);
  $len = sizeof($arr);
  echo "<br />Unsorted Array: ";
  printArr($arr,$len);

  sort($arr); //Sorting the array using inbuilt function
  
  echo "<br />Sorted Array: ";
  printArr($arr,$len);

  function printArr($arr,$len){
    echo "[ ";
    for ($i=0; $i < $len; $i++) { 
      echo "$arr[$i] ";
    }echo "]";
  }  
  ?>
</body>
</html>
