<!doctype html>

<html lang="en">
<head>
    <title>Dice Roll</title>
</head>
<body>

<?php 
	
	if ($ran_num == $guess) {
		echo '<h1>Correct! The roll was ' . $ran_num; '</h1>';
  	} else {
  		echo '<h1>Sorry, the roll was ' . $ran_num; '</h1>';
  	}
?>
</body>
</html>