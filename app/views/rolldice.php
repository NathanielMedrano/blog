<!doctype html>

<html lang="en">
<head>
    <title>Dice Roll</title>
</head>
<body>

	<h1>
		<?php 
			
			if ($ran_num == $guess) {
				echo 'Correct! The roll was ' . $ran_num;
		  	} else {
		  		echo 'Sorry, the roll was ' . $ran_num;
		  	}
		?>
	</h1>
</body>
</html>