<?php
    $email = $username = $contact = $password ="";
    $error = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        function validate($data){
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            $data = trim($data);
            return $data;
    
        }
        //validation of email
        if(empty($_POST["email"])){
            $error.="Email is empty";
        }
        else{
            $email = validate($_POST["email"]);
        }
        //validate username
        if(empty($_POST["username"])){
            $error = "Name is not written";
        }
        else{
            if(!preg_match("/^[a-zA-Z]*$/", $_POST["username"])){
                $error.="Name format is not correct";
            }
            else{
                $username = validate($_POST["username"]);
            }

        }
        // validate contact
        if(empty($_POST["contact"])){
            $error = "Contact is empty";
        }
        else{
            if(preg_match("/^[a-zA-Z]*$/", $_POST["contact"])){
                $error.="Incorrect contact number";
            }
            else{
                $contact = validate($_POST["contact"]);
            }
            //validate Password
if(empty($_POST["password"])){
	$error .= "password is empty!";
}
	else{
		$password = validate($_POST["password"]);
		
	}
}
    }
//require("connection.php");
$conn = new mysqli("localhost","root","","internshipportal");
$sql="INSERT INTO userinfo(email,username,contact,password)VALUES('$email','$username','$contact','$password');";

if($conn->query($sql) === TRUE){
	$_SESSION["SignUpSuccess"] = "Successful Signed up!";
	header("Location:loginINTERN.php");
}
else{
	$_SESSION["loginError"] = "Sorry couldn't Signed up!";
	header("Location:loginINTERN.php");
	
}
$conn->close();