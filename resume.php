<?php
require('signupdata.php');
    $file ="";
    $error = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        function validate($data){
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            $data = trim($data);
            return $data;
    
        }
        //validation of email
        if(empty($_POST["file"])){
            $error.="Email is empty";
        }
        else{
            $email = validate($_POST["email"]);
        }
    }
    $username=$_POST["username"]
require("connection.php");
//$conn = new mysqli("localhost","root","","internshipportal");
$sql="INSERT INTO resume(File,Username)VALUES('$file','$username');";
$conn->close();