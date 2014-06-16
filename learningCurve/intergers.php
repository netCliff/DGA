<!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Strings Time</title>
 	</head>

 	<body>
 		<?php
 	
 			$var = 3;
 			$var2 = 4;

 		?>
 			Baisic Math: <?php echo((1+2+$var) * $var2) /2-5 ?> <br/>
 			<br />
			Absolute Value: <?php echo abs(0-300); ?> <br/>
			Exponential: <?php echo pow(2,8); ?> <br/>
			Square root: <?php echo sqrt(100); ?> <br/>
			Random: <?php echo rand(); ?> <br/>
			Random (min, max): <?php echo rand(1, 10); ?> <br/>

			<br/>
			+= : <?php $var +=4; echo $var?> <br/>

 	</body>

 </html>