<!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Forms Processing</title>
 	</head>

 	<body>
 		<pre>
 			<?php print_r($_POST); ?>
 		</pre>
 		</body>

 		<br/>

 			<?php
 			//to solve the problem of form not detected, use if and isset method
 			if(isset($_POST["username"]))
 			{
 				$username = $_POST["username"]; 
 			}
 			else
 			{
 				$username = "";
 			}

 			if(isset($_POST["password"]))
 			{
 				$password = $_POST["password"]; 
 			}
 				else
 			{
 				$password = "";
 			}


 			echo "{$username}: {$password}";
 			?>

 			<?php
 			//tenary operator, which is a special way of doing if else statements
 			$username = isset($_POST["username"]) ? $_POST["username"] : "";
 			$password = isset($_POST["password"]) ? $_POST["password"] : "";
 			?>

 			<?php
 			//easiest way to do if else:
 			if(isset($_POST["submit"]))
 				echo "form was submitted";
 			?>
 		
 	</body> 
 </html>