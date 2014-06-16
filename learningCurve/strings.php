 <!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Strings Time</title>
 	</head>

 	<body>
 		<?php
 			echo "Strings time <br/>";

 			$greeting = "Hello";
 			$target = "World";

 			//Concatenate the above variable using the dot (.)
 			$phrase = $greeting . " " . $target;
 			echo $phrase;
 		?>

 		<br /> 

 		<?php
 		//variable replacement.. this is to show the importance of using double quotes
 		//because with single quotes you can't do this. 
 			echo "$phrase Again";
 		?>

 	</body>

 </html>