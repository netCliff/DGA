<!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Strings Time</title>
 	</head>

 	<body>
 		<?php
 		
 		/*

 		*/

 		?>

 		<?php $numbers = array(6, 12, 10.11, 12, 42, 13, 112);?>
 		Count: <?php echo count($numbers); ?><br/>
 		Max Value: <?php echo max($numbers); ?><br/>
 		Min Value: <?php echo min($numbers); ?><br/>
 		Sort: <?php echo sort($numbers); ?> <br/>
 		Reverse sort: <?php echo rsort($numbers); ?> <br/>
 		<pre>
 		<?php echo print_r($numbers); ?> 
 		</pre>
 	</body>

 </html>