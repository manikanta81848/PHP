<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{margin: 0;padding: 0;height: 100vh;width: 100vw;display:flex;justify-content: center;align-items: center; font-family: sans-serif;}
        form{display:flex;flex-direction: column;padding: 10px;border: dashed #000 3px;}
        span.required{color: #f00;}
        input{padding: 10px;margin-bottom:10px;}
        .warnings{color: #fff;position: absolute;top: 0; left: 50%;transform: translateX(-50%);display: flex;flex-direction: column;gap:10px;text-transform: uppercase;}
        .warning{padding: 15px;background: #d16c6c;text-align: center;}
        .success{padding: 15px;background: #5aa35a;text-align: center;}
        fieldset{border:none;}
    </style>
    <title>Practical 20</title>
</head>
<body>
    <?php 
        $errors = [];
        $fields = ["name","age","address","email"];
        $optionalFields = ["email"];
        $values = ["name"=> "", "age"=> NULL , "address" => "", "email" => ""];
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            foreach ($fields as $field ) {
                if(empty($_POST[$field]) && !in_array($field, $optionalFields)){
                    $errors[] = $field;
                }else{
                    $values[$field] = $_POST[$field];
                }
            }
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Form Validation</h1>
        <fieldset><input type="text" name="name" id="name" placeholder="NAME" value="<?php echo htmlspecialchars($values['name']);?>" /><span class="required">*</span></fieldset>
        <fieldset><input type="number" name="age" id="age" placeholder="AGE" value="<?php echo htmlspecialchars($values['age']);?>" /><span class="required">*</span></fieldset>
        <fieldset><input type="email" name="email" id="email" placeholder="EMAIL" value="<?php echo htmlspecialchars($values['email']);?>" /></fieldset>
        <fieldset><textarea name="address" id="address" cols="23" rows="5" placeholder="ADDRESS"><?php echo htmlspecialchars($values['address']);?></textarea><span class="required">*</span></fieldset>
        <input type="submit" value="SUBMIT" />
    </form>
    <?php 
    $warncount = 0;
    echo "<div class=\"warnings\">";
    if($values["name"] == ""){
        echo "<span class=\"warning\">Name is required!</span>";
        $warncount++;
    }
    if($values["age"] == NULL){
        echo "<span class=\"warning\">Age is required!</span>";
        $warncount++;
    }elseif($values["age"] > 18){
        echo "<span class=\"warning\">Age must be less than 18!</span>";
        $warncount++;
    }
    if($values["address"] == ""){
        echo "<span class=\"warning\">Address is required!</span>";
        $warncount++;
    }elseif( !str_contains($values["address"], "Delhi")){            
        echo "<span class=\"warning\">Address must contain <strong>DELHI</strong>!</span>";
        $warncount++;
    }
    if($warncount == 0){
        echo "<span class=\"success\">Form Submitted Successfully</span>";
    }
    echo "</div>";
    ?>
</body>
</html>