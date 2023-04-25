<?php



$id = $_GET['jobtitle'];
$conn = new mysqli("localhost","root","","internshipportal");
$sql = "DELETE FROM userinfo WHERE jobtitle ='$id'";
$data = mysqli_query($conn,$sql);
 if($conn->query($sql) ===TRUE){
 	header("Location:updatevacancy.php");
 }
 else{
 	header("Location:vacancypost.php");
 }

 $conn->close();

 ?>