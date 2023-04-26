<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
        *{ margin: 0; padding: 0; box-sizing: border-box; font-family: sans-serif; border: none; }
        .container{ display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding-top: 20px; height: 100vh; gap: 10px; }
        form{ display: flex; flex-direction: column; gap: 10px; }
        input[type="text"]{ padding: 10px; border-bottom: 1px solid black; }
        input[type="submit"]{ padding: 10px; }
	</style>
	<title>Practical 8</title>
</head>
<body>
	<div class="container">
		<form action="" method="post">
			<h1 style="text-shadow: 1px 1px 2px #120E43;color: #FF6263;">Enter the string: </h1>
			<input type="text" name="str" value="" />
			<input type="submit" value="REVERSE" />
		</form>
		<?php 
			$str="evoba gnirts a ddA" ;
			$res="";
			extract($_POST);
			for ( $i = strlen($str)-1 ; $i >= 0 ; $i--) {
				$res .= $str[$i];
			}
			echo "$res <br/>";
			$parts = str_split($str);
			foreach ($parts as $part) {
				echo $part;
			}
		?>	
	</div>
</body>
</html>
