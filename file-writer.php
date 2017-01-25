<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>
		<?php
			$myFile = fopen("c.txt","w") or die("Unable to open file!");
			$txt = "100";
			fwrite("c.txt",$txt);
		?>
	</body>
</html>