<?php
 $arr = array("amit","nishant","kartik","aakash","prashant");
 echo "<h1>";
 foreach ($arr as $name) {
     if($name[0] == "a" or $name[0] == "A"){
         echo "$name <br>";
        }
    }
echo "</h1>";
?>