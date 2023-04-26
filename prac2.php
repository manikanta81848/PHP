<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 2</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">Month number: </label>
        <input type="number" name="month" id="number" value = "" />
    </form>

    <?php 
        $month = 13;
        extract($_POST);
        echo "Month number : $month<br>";
        switch($month){
            case 1: echo "31 days"; break;
            case 2: echo "28 days"; break;
            case 3: echo "31 days"; break;
            case 4: echo "30 days"; break;
            case 5: echo "31 days"; break;
            case 6: echo "30 days"; break;          
            case 7: echo "31 days"; break;
            case 8: echo "31 days"; break;
            case 9: echo "30 days"; break;
            case 10: echo "31 days"; break;
            case 11: echo "30 days"; break;
            case 12: echo "31 days"; break;
            default:
                echo "Enter a valid number";
        }
    ?>
</body>
</html>
