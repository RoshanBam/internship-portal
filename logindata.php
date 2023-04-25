<?php
session_start();


$username = $password ="";
$error = "";
 if($_SERVER["REQUEST_METHOD"]=="POST"){
 	//EMAIL
 	if(empty($_POST["email"])){
 		$error = "Empty Email Field!";

 	}
 	else{
 		$email = validate($_POST["email"]);
 	}
 	//Password
 if(empty($_POST["password"])){
 		$error .= "Password is Empty!";

 	}
 	else{
 		$password = $_POST["password"];
 	}
 }

 function validate($data){
 	$data = trim($data);
 	$data = stripcslashes($data);
 	$data = htmlspecialchars($data);
 	return $data;
 }
 

 $conn = new mysqli("localhost","root","","internshipportal");

 $sql = "SELECT * FROM userinfo WHERE Email ='$email' AND Password='$password'";
 $result = $conn->query($sql);
 //$getName = mysqli_fetch_assoc($result);

 if(mysqli_num_rows($result)){
	$_SESSION['userName']=$_POST['username'];
	echo"
	<script>
	window.location.href='Homeemployee.php';
	</script>
	";
 	
 }
 else{
	echo"
	<script>
	window.location.href='Homeemployee.php';
	</script>
	";
 }

 $conn->close();

 ?>