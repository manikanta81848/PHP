<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form--container{ width: 100vw; display:flex; justify-content: center; align-items: center; text-align:center; gap: 5px;}
        .container{ display:flex; flex-direction: column; justify-content: center; align-items: center; gap: 5px; padding: 20px; background: #fdb77b; font-family: "cursive"; }
        .result-container{ display: flex; justify-content: center; align-items: center; }
        fieldset{ border-radius: 5px; border: none; background: #efffbc; }
    </style>
    <title>Practical 1</title>
</head>
<body>
        <div class="form--container">
            <form action="" method="POST" class="container">
                <fieldset>
                    <label for="a">A:</label>
                    <input type="text" name="A" id="a" value="" required/><br />
                </fieldset>
                <fieldset>
                    <label for="b">B:</label>
                    <input type="text" name="B" id="b" value="" required/><br />
                </fieldset>
                <fieldset>
                    <label for="c">C:</label>
                    <input type="text" name="C" id="c" value="" required/><br />
                </fieldset>
                <input type="submit" value="SUBMIT">
            </form>
        </div>
    
    <?php 
        pre_r($_POST);
    ?>

    <?php 
        function pre_r( $array = 0 ){
            $A = $B = $C = 0;

            extract($array);
            $gt = $A > $B ?( $A > $C ? $A : $C ): ($B > $C ? $B : $C);
            echo "<div class = \"result-container\"><br><br>A : $A<br>B : $B<br>C : $C";
            
            echo "<br><br>Greater : ";
            print_r($gt);
            echo "</div>";
        }
    ?>
</body>
</html>
