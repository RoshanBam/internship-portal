<?php
$id=$_GET['id'];
require("connection.php");
    $email=$_POST["email"];
    $name=$_POST["username"];
    $contact=$_POST["contact"];
    $conn = new mysqli("localhost","root","","internshipportal");
$sql="INSERT INTO browsedata(email,username,contact)VALUES('$email','$username','$contact');";

if($conn->query($sql) === TRUE){
	$_SESSION["dataentered"] = "Successful entry!";
	header("Location:browse.php");
}
else{
	$_SESSION["error"] = "Sorry couldn't enter data!";
	header("Location:browse.php");
	
}
$conn->close();
?>