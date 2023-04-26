<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
        *{ margin: 0; padding: 0; box-sizing: border-box; font-family: sans-serif; border: none; }
        .container{ display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding-top: 20px; height: 100vh; gap: 10px; }
        form{ display: flex; flex-direction: column; gap: 10px; }
        input[type="number"]{ padding: 10px; border-bottom: 1px solid black; }
        input[type="submit"]{ padding: 10px; }
	</style>
	<title>Practical 7</title>
</head>
<body>
	<div class="container">
		<form action="" method="post">
			<h1  style="text-shadow: 1px 1px 2px #120E43;color: #FF6263;">Combinations Calculator : </h1>
			<fieldset>
				<label for="num1">N : </label>
				<input type="number" name="N" id="num1" min="0">
			</fieldset>
			<fieldset>
				<label for="num2">R : </label>
				<input type="number" name="R" id="num2" min="0">
			</fieldset>
			<input type="submit" value="CALCULATE">
		</form>

		<?php
			$N=$R=0;
			extract($_POST);
			if($N < $R){
				echo "Invalid input!";
			}else{
				$ans=(fact($N)/(fact($R)*fact($N-$R)));	print_r("<p><sup>$N</sup>C<sub>$R</sub> = $ans</p>");
			} 
			
		function fact($num=0){
			$fact=1;
			if($num !== 0 || $num !== 1){	for ($i=1; $i <= $num; $i++) { $fact *= $i; } }
			return $fact;
		}
		?>
	</div>
</body>
</html>
