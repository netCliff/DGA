<!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Associative Arrays</title>
 	</head>

 	<body>
 		<?php

 		/*
 		An associative array is object-indexed not interger-indexed like the general array. it uses key-value pair.  key is also known as label..

 		Basic Arrays: used when the order is most important
 		Associative: When having a reference label is most important
 		*/
 			$numbers = array(4,5,1,6,9,2);

 			echo $numbers [1];

 		?>

 		<?php $mixed = array("Here"=>"Clifton", "what" => "Programmer"); ?>
 
 		<pre>
 		<?php echo $mixed ["what"]; ?> 
 		</pre>
 	</body>

 </html>