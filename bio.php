<!doctype html>
<html>
	
<head>
	

	<title>Bios</title>

	<style>
		
#bio_section{

	background-color:#ccccbe;

		}
	</style>
</head>

<body>

	<nav>

		<span><a href = "signup.html" alt = "Signup">Signup</a></span>

	</nav>
<h1>Here is everyones bios:</h1>

<div id = "bio_section">
<?php

session_start();




$pdo = new PDO('mysql:dbname=bio;host=localhost', 'root', 'simon sleeping123!@#');
 
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
date_default_timezone_set('America/New_York');


 $stmt = $pdo->prepare("select * from bios");

 $stmt->execute();


 while($resulte = $stmt->fetch(PDO::FETCH_ASSOC)){


echo "<h2 class = 'name'>" . $resulte['name'] . "</h2>";
echo "<p class = 'talent'>" . $resulte['talent'] . "</p>";
echo "<p class = 'bio'>" . $resulte['bio'] . "</p>";
 }

?>

</div>
</body>

</html>