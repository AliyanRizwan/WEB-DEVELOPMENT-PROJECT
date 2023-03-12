<?php
$databaseHost = 'localhost';
$databaseName = 'webproject';
$databaseUsername = 'root';
$databasePassword = ''; 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM data WHERE ProductId=$id");
header("Location:AdminOptions.php");
?>

