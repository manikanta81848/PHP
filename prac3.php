<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{margin: 0; padding: 0; box-sizing: border-box; font-family: sans-serif;}
        .container{display: flex; flex-direction: column; justify-content: center; align-items: center;
            text-align: center; padding-top: 20px; height: 100vh; gap: 10px;}
        select{border-radius: 10px; padding: 10px;}
    </style>
    <title>Practical 3</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="dropDown"><h1 style="text-shadow: 1px 1px 2px #120E43;color: #FF6263;">GREETING BY LANGUAGE: </h1></label><br/>
            <select  onchange="this.form.submit()" name="lang" id="dropDown">
                <option selected disabled>--Select a language--</option>
                <option value="English">English</option>
                <option value="Hindi">Hindi</option>
                <option value="Russian">Russian</option>
                <option value="Sanskrit">Sanskrit</option>
                <option value="Spanish">Spanish</option>
            </select>
        </form>
        <?php 
            $lang="";
            extract($_POST);
            echo("<br />Selected Language : $lang");
            switch($lang){
                case 'English':
                    echo("<h1>Hi!</h1>");
                    break;
                case 'Hindi':
                    echo("<h1>Namaste!</h1>");
                    break;
                case 'Russian':
                    echo("<h1>Привет!</h1>");
                    break;
                case 'Sanskrit':
                    echo("<h1>Namaskaram!</h1>");
                    break;
                case 'Spanish':
                    echo("<h1>Hola!</h1>");
                    break;
                default:
                    echo("<b>NONE</b>");
            }
        ?>
    </div>
</body>
</html>
