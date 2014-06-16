<!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Strings Time</title>
 	</head>

 	<body>
 		<?php
 		
 		/*
		it does nt refer to zero.. but a variable that is empty
 		*/

		$var1 = null;
		$var2 = "";
		?>

		var1 null? <?php echo is_null($var1)?>; <br/>
		var2 null? <?php echo is_null($var2)?> ;<br/>
		var3 null? <?php echo is_null($var3)?> ;<br/>
		<br/>

		var1 null? <?php echo isset($var1)?>; <br/>
		var2 null? <?php echo isset($var2)?> ;<br/>
		var3 null? <?php echo isset($var3)?> ;<br/>
 		

 	</body>

 </html>