<?php
//The connection is done above everything else:
//1. create a database connection:
$dbhost = "localhost";
$dbuser = "dga_cms";
$dbpass = "password";
$dbname = "widget_corp";
//now lets put the handle to connect to the db
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//Now test if the connection was successful. if not successful die with 
//the respectful message:
if(mysqli_connect_errno())
{
	die("Database connection failed: ". mysqli_connect_error(). 
		"(".mysqli_connect_errno().")"
		);	
}

?>

<?php

//2. Perform database query: 
$query = "SELECT * FROM subjects";
//catch results from the above query:
$result = mysqli_query($connection, $query);
//test if query succeeded:
if(!$result)
{
		die("Database query failed..");
}

 ?>

<!DOCTYPE html>
 <html lang = "en">
 	<head>
 		<title>Databases</title>
 	</head>

 	<body>
 		
 		<?php
 		//3. Use returned data if any:
 		while($row = mysqli_fetch_row($result))
 		{
 			//output data 
 			var_dump($row);
 			echo "<hr/>"; //hr - horizontal line
 		}
 		?>

 		<?php
 		//4. Release returned data:
 		mysqli_free_result($result);
 		?>

 	</body>

 </html>

 <?php
 //5. close the database connection:
 mysqli_close($connection);
 ?>