<?php 
    $arr = array("Maths" => 95,"English" => 98,"Physics" => 89,"Chemistry" => 90,"Biology" => 93 );
    echo "<h1>Before Sorting: </h1><table>";
    foreach ($arr as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
    ksort($arr);
    echo "<h1>After Sorting: </h1><table>";
    foreach ($arr as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
?>