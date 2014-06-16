 <!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>First Page</title>
 	</head>

 	<body>
 	
 		<?php $link_name = "Second Page";?>
 		<?php $id = 33; ?>

 		<a href="secondPage.php ?id=<?php echo $id; ?>"><?php echo $link_name;?> </a>

 	</body>

 </html>