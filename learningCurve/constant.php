<!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Juggling and Casting</title>
 	</head>

 	<body>
 		<?php
 		
 		/*
		Constants are never to be changed, these are the opposite of Variable. 
 		*/

		$max_width = 980; //this is no how you define a constant, it should be upper case. 

		define("MAX_WIDTH", 1230);
		echo MAX_WIDTH;

		?>
		<br/>

		<?php 
		//here we shall prove that you cant change the value of a constant
		MAX_WIDTH = MAX_WIDTH + 1; 
		echo MAX_WIDTH;

 	</body>

 </html>