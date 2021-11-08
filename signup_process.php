<?php


$name = $_POST['name'];
$bio = $_POST['bio'];
$talent = $_POST['talent'];


ini_set('display_errors', '1');

ini_set('display_startup_errors', '1');
error_reporting(E_ALL);







$pdo = new PDO('mysql:dbname=bio;host=localhost', 'root', 'simon sleeping123!@#');
 
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
date_default_timezone_set('America/New_York');


 $stmt2 = $pdo->prepare("INSERT INTO bios (name,bio,talent) VALUES (:name,:bio,:talent)");

 $stmt2->execute(array('name' => $name, 'bio' => $bio,'talent' => $talent));

header("location:submitted.html")


?>
