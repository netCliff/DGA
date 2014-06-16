<!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Cookies</title>
 	</head>

 	<body>

 	<?php
 		$name="test";
 		$value=45;
 		$expire=time() + (60*60*24*7); // add seconds
 		//setcookie($name, $value, $expire);
 		setcookie($name)
 	?>

 	<pre>
 		<?php
 		 	print_r($_COOKIE);
 		?>
 	</pre>
 	
 	</body>

 </html>