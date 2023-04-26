<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
        *{
            margin: 0; padding: 0; box-sizing: border-box; font-family: sans-serif;
        }
        .container{
            display: flex; flex-direction: column; justify-content: center; align-items: center;
            text-align: center; padding-top: 20px; height: 100vh; gap: 10px;
        }
        form{
        	display: flex; flex-direction: column;
        	gap: 10px;
        }
        input[type="number"]{
            border-radius: 10px; padding: 10px;
        }
        .star{
        	text-align: left;
        	font-family: serif;
        }
	</style>
	<title>Practical 6</title>
</head>
<body>
	<div class="container">
		<form action="" method="post">
			<label for="size"><h1  style="text-shadow: 1px 1px 2px #120E43;color: #FF6263;">Number of Lines : </h1></label>
			<input type="number" name="size" id="size" min="0" max="20">
		</form>
		<?php 
		$size=0;
		extract($_POST);

		echo "<strong>$size Lines</strong><div class='star'/>";		
		
		for($i=1;$i<=$size;$i++){
			for ($j=0; $j < $i; $j++) { 
				echo "* ";
			}
			echo "<br />";
		}
		echo "</div>"
		?>
	</div>
</body>
</html>
