<!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Strings Time</title>
 	</head>

 	<body>
 		<?php
 			$numbers = array(4,5,1,6,9,2);

 			echo $numbers [1];

 		?>

 		<?php $mixed = array(6, "Here", 10.11, 12, array("x", "w", 12)); ?>
 		<?php echo $mixed [1]; ?><br/>
 		<?php echo $mixed [2]; ?><br/>
 		<?php echo $mixed [3]; ?><br/>
 		<?php echo $mixed; ?> <br/>

 		<pre>
 		<?php echo print_r($mixed); ?> 
 		</pre>
 	</body>

 </html>