<?php
    $str = "A##quick##brown##fox##jumps##over##the##lazy##dog";
    echo "<h1>Given String: </h1><p>$str</p><h1>Array:</h1><h3>";
    $arr = explode("##",$str);
    $index=0;
    foreach($arr as $elem){
        echo "Array[$index] = $elem <br />";
        $index++;
    }echo "</h3>";
?>