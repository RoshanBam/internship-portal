<?php
session_start();


$id = $password ="";
$error = "";
 if($_SERVER["REQUEST_METHOD"]=="POST"){
 	//EMAIL
 	if(empty($_POST["id"])){
 		$error = "Empty id Field!";

 	}
 	else{
 		$id = validate($_POST["id"]);
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

 $sql = "SELECT * FROM admin WHERE id ='$id' AND Password='$password'";
 $result = $conn->query($sql);
 //$getName = mysqli_fetch_assoc($result);

 if(mysqli_num_rows($result)){
	$_SESSION['id']=$_POST['id'];
	echo"
	<script>
	window.location.href='adminhome.php';
	</script>
	";
 	
 }
 else{
	echo"
	<script>
	window.location.href='adminhome.php';
	</script>
	";
 }

 $conn->close();

 ?>