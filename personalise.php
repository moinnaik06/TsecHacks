<?php
session_start();
$email = $_SESSION['email'];
include 'dbcon.php';
$colour = $_POST['colour'];
$food = $_POST['food'];
$friend1 = $_POST['friend1'];
$friend2 = $_POST['friend2'];
$friend3 = $_POST['friend3'];
$enemy1 = $_POST['enemy1'];
$enemy2 = $_POST['enemy2'];
$enemy3 = $_POST['enemy3'];
$age = $_POST['age'];
$hobby = $_POST['hobby'];

$sql = "INSERT INTO personalise_data('email','colour','food','friend1','friend2','friend3','enemy1','enemy2','enemy3','age','hobby') VALUES('$email','$colour','$food','$friend1','$friend2','$friend3','$enemy1','$enemy2','$enemy3','$age','$hobby')";

if(mysqli_query($conn, $sql))
{
	header('location: books.php');
}
else {
	mysqli_error($conn);
}	
?>