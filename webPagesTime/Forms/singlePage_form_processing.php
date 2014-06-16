<?php
 //We start by checking if the form was even submitted in the first place:
 	if(isset($_POST["submit"]))
 	{
 		//form was submitted
 		$username = $_POST["username"]; 
		$password = $_POST["password"]; 
 		$message ="There was some Errors: {$username}";
 	}
 	else
 	{
 		$message = "Please Log In";
 	}
 ?>
 		

<!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Forms</title>
 	</head>

 	<body>

 		<?php echo $message; ?> <br/>

 		<form action="singlePage_form_processing.php" method="post">
 			username: <input type = "text" name="username" value="<?php echo $username; ?>"/><br/>
 			Password: <input type="password" name="password" value=""/><br/>
 			<br/>
 			<input type="submit" name="submit" value="Submit"/>
 		</form>

 	</body>

 </html>