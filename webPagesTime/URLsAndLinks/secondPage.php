 <!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Second Page</title>
 	</head>

 	<body>

 	<pre>
 		<?php
 			print_r($_GET);	
 			$id = $_GET['id'];
 			echo $id;
 		?>
 	</pre>

 	</body>

 </html>