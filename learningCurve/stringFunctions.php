<!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Strings Functions</title>
 	</head>

 	<body>
 		
 		<?php
 		
 			$first ="The quick brown fox";
 			$second = "Jumped over the lazy dog";

 			$third = $first;
 			$third .= $second; //concatenate..
 			echo $third;
 		?>
 		<br/>
 		Lowercase:: <?php echo strtolower($third); ?> <br/>

 	</body>

 </html>