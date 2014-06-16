<!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Juggling and Casting</title>
 	</head>

 	<body>
 		<?php
 		
 		/*
		 When PHP does the conversion, automatically its known as juggling, where as when we do it manual its casting

		 (interger) $var -- done just like how its done in C

		 Type Juggling is ok, but it is available to always do casting for yourself
 		*/

		?>

		Type Juggling <br/>
		<?php $count = "2"; ?> <br/>
		Type: <?php echo gettype($count); ?> <br/>

		<?php $count +=3; ?><br/>
		Total Type: <?php echo gettype($count); ?> <br/>
 		
 		Type Casting <br/>
 		<?php settype($count, "interger"); ?>
 		Casting 1 Type Using Function: <?php echo gettype($count); ?> <br/>

 		<?php $count2 = (string) $count;?>
 		Casting Count 1: <?php echo gettype($count); ?> <br/>
 		Casting Count 2: <?php echo gettype($count2); ?> <br/>


 	</body>

 </html>